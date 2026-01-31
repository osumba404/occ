# USSD External Testing Guide

## Overview

This guide explains how to test the ODM Comrades Chapter USSD registration system with actual mobile devices using various methods.

## Method 1: Ngrok Tunnel (Recommended)

### Prerequisites
- Ngrok account (free tier available)
- Local development server running
- Mobile phone with USSD capability

### Setup Steps

1. **Install Ngrok**
   ```bash
   # Windows: Download from https://ngrok.com/download
   # Or use package manager:
   choco install ngrok  # Windows
   brew install ngrok    # macOS
   ```

2. **Start Your Laravel Server**
   ```bash
   php artisan serve --host=0.0.0.0 --port=8000
   ```
   *Important: Use `--host=0.0.0.0` to allow external connections*

3. **Start Ngrok Tunnel**
   ```bash
   ngrok http 8000
   ```

4. **Get Your Public URL**
   Ngrok will provide a URL like: `https://random-string.ngrok.io`

5. **Configure USSD Gateway**
   Use the ngrok URL as your webhook: `https://random-string.ngrok.io/webhook/ussd`

### Testing with Real USSD Gateway

#### Option A: Africa's Talking (Recommended for Kenya)

1. **Sign up** at [Africa's Talking](https://www.africastalking.com/)

2. **Create USSD Service**
   - Go to USSD section in dashboard
   - Create new service
   - Set shortcode (e.g., *123#)
   - Set webhook URL: `https://your-ngrok-url.ngrok.io/webhook/ussd`

3. **Test from Mobile**
   - Dial your shortcode from any Kenyan mobile number
   - Navigate through the registration flow

#### Option B: Safaricom Bonga

1. **Contact Safaricom Developer Portal**
2. **Apply for USSD shortcode**
3. **Set webhook URL** to your ngrok endpoint

#### Option C: Test with Local USSD Simulator

Use the built-in testing interface:
- Access: `http://127.0.0.1:8000/ussd-test`
- Simulate complete USSD flow
- Test all registration scenarios

## Method 2: Using Twilio

### Setup

1. **Create Twilio Account**
   - Sign up at [twilio.com](https://www.twilio.com)
   - Get a phone number with USSD capability

2. **Configure Twilio USSD**
   ```php
   // Example Twilio webhook handler
   Route::post('/twilio/ussd', function(Request $request) {
       $sessionId = $request->input('SessionId');
       $phoneNumber = $request->input('From');
       $text = $request->input('Body');
       
       // Forward to your USSD controller
       return app(UssdController::class)->handleUssd($request);
   });
   ```

3. **Set Webhook URL**
   - Use your ngrok URL: `https://your-ngrok-url.ngrok.io/twilio/ussd`

## Method 3: Self-Hosted USSD Gateway

### For Advanced Users

1. **Set up USSD Gateway Server**
   ```bash
   # Example using Node.js
   npm install express body-parser
   ```

2. **Create Gateway Script**
   ```javascript
   const express = require('express');
   const bodyParser = require('body-parser');
   const axios = require('axios');

   const app = express();
   app.use(bodyParser.urlencoded({ extended: true }));

   app.post('/ussd-gateway', async (req, res) => {
       try {
           const response = await axios.post('http://localhost:8000/webhook/ussd', {
               sessionId: req.body.sessionId,
               phoneNumber: req.body.phoneNumber,
               text: req.body.text,
               serviceCode: req.body.serviceCode
           });
           
           res.send(response.data);
       } catch (error) {
           res.send('END Service temporarily unavailable');
       }
   });

   app.listen(3000, () => {
       console.log('USSD Gateway running on port 3000');
   });
   ```

## Method 4: Android USSD Testing App

### Create Simple Android App

1. **Use Android Studio**
2. **Create USSD Testing App**
3. **Make HTTP requests** to your ngrok endpoint

```java
// Example Android code
public void sendUssdRequest(String input) {
    String url = "https://your-ngrok-url.ngrok.io/webhook/ussd";
    
    RequestBody body = new FormBody.Builder()
        .add("sessionId", "test_" + System.currentTimeMillis())
        .add("phoneNumber", "254712345678")
        .add("text", input)
        .add("serviceCode", "*123#")
        .build();
        
    Request request = new Request.Builder()
        .url(url)
        .post(body)
        .build();
        
    client.newCall(request).enqueue(callback);
}
```

## Testing Checklist

### Before Testing
- [ ] Laravel server running with `--host=0.0.0.0`
- [ ] Ngrok tunnel active
- [ ] Database migrations completed
- [ ] Test data seeded (regions, counties, etc.)

### During Testing
- [ ] Test complete registration flow
- [ ] Test error scenarios (invalid inputs)
- [ ] Test session timeout handling
- [ ] Verify database records created
- [ ] Check logs for errors

### After Testing
- [ ] Review registration data
- [ ] Verify user accounts created
- [ ] Test login with created accounts
- [ ] Check admin dashboard for new users

## Debugging Tips

### 1. Enable Debug Logging
```php
// In .env
LOG_LEVEL=debug
USSD_DEBUG=true
```

### 2. Monitor Ngrok
```bash
ngrok http 8000 --log=stdout
```

### 3. Check Laravel Logs
```bash
tail -f storage/logs/laravel.log
```

### 4. Database Query Logging
```php
// In AppServiceProvider.php
DB::listen(function ($query) {
    Log::info('USSD Query: ' . $query->sql);
});
```

## Common Issues and Solutions

### Issue 1: Connection Timeout
**Problem**: Mobile device can't reach your server
**Solution**: 
- Ensure ngrok is running
- Check firewall settings
- Verify `--host=0.0.0.0` on Laravel serve

### Issue 2: Session Not Persisting
**Problem**: USSD session restarts on each input
**Solution**:
- Check session storage configuration
- Verify session ID consistency
- Implement Redis for production

### Issue 3: Invalid USSD Response Format
**Problem**: Gateway rejects your response
**Solution**:
- Ensure responses start with CON or END
- Check response headers
- Validate content-type: text/plain

### Issue 4: Database Connection Issues
**Problem**: Registration fails during database operations
**Solution**:
- Check database credentials
- Verify migrations completed
- Check database server connectivity

## Production Deployment

### Security Considerations
1. **HTTPS Required** - All USSD gateways require HTTPS
2. **Rate Limiting** - Implement abuse prevention
3. **Input Validation** - Sanitize all inputs
4. **Session Security** - Use secure session storage

### Performance Optimization
1. **Redis Sessions** - For session persistence
2. **Database Indexing** - Optimize queries
3. **Caching** - Cache geographic data
4. **Load Balancing** - For high traffic

### Monitoring
1. **Uptime Monitoring** - Track service availability
2. **Error Tracking** - Monitor failed registrations
3. **Analytics** - Track usage patterns
4. **Alerts** - Set up error notifications

## Testing with Real Kenyan Numbers

### Requirements
- Kenyan mobile network operator
- Valid Kenyan phone number
- USSD-capable phone

### Process
1. **Choose Gateway Provider** (Africa's Talking recommended)
2. **Register Shortcode** (*123# or custom)
3. **Configure Webhook** with ngrok URL
4. **Test Registration** from actual device
5. **Verify Data** in admin dashboard

## Cost Considerations

### Development Costs
- Ngrok: Free tier sufficient for testing
- Africa's Talking: Free credits available
- Twilio: Pay-as-you-go pricing

### Production Costs
- USSD shortcode rental: ~$50-100/month
- Gateway provider fees: ~$0.01-0.05 per session
- Hosting and infrastructure costs

## Support and Resources

### Documentation
- [USSD_DOCUMENTATION.md](./USSD_DOCUMENTATION.md) - Technical details
- [Africa's Talking USSD Docs](https://developers.africastalking.com/ussd)
- [Twilio USSD Docs](https://www.twilio.com/docs/ussd)

### Community Support
- Laravel USSD packages and tutorials
- Open-source USSD gateway projects
- Developer forums and communities

### Emergency Contacts
- System administrator for server issues
- Gateway provider support for USSD problems
- Database administrator for data issues
