<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USSD Testing - ODM Comrades Chapter</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        orange: {
                            500: '#f97316',
                            600: '#ea580c',
                            700: '#c2410c',
                        },
                        blue: {
                            900: '#1e3a8a',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-center mb-8 text-gray-900">USSD Registration Testing</h1>
        
        <div class="max-w-2xl mx-auto">
            <!-- USSD Simulator -->
            <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
                <h2 class="text-xl font-semibold mb-4">USSD Simulator</h2>
                
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                    <input type="text" id="phoneNumber" value="254712345678" 
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-orange-500 focus:border-orange-500">
                </div>
                
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">USSD Code</label>
                    <input type="text" id="ussdCode" value="*123#" 
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-orange-500 focus:border-orange-500">
                </div>
                
                <button onclick="startUssd()" 
                        class="w-full bg-orange-500 text-white py-2 px-4 rounded-md hover:bg-orange-600 transition-colors">
                    Start USSD Session
                </button>
            </div>
            
            <!-- USSD Screen -->
            <div class="bg-black rounded-lg shadow-lg p-6 mb-8" id="ussdScreen" style="display: none;">
                <div class="text-green-400 font-mono text-sm mb-4" id="ussdContent">
                    <!-- USSD content will appear here -->
                </div>
                
                <div class="flex">
                    <input type="text" id="ussdInput" 
                           class="flex-1 bg-gray-800 text-white px-3 py-2 rounded-l-md focus:outline-none focus:ring-orange-500"
                           placeholder="Enter your choice...">
                    <button onclick="sendUssdInput()" 
                            class="bg-orange-500 text-white px-4 py-2 rounded-r-md hover:bg-orange-600">
                        Send
                    </button>
                    <button onclick="endUssd()" 
                            class="bg-red-500 text-white px-4 py-2 rounded-r-md hover:bg-red-600 ml-2">
                        End
                    </button>
                </div>
            </div>
            
            <!-- Session Log -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h2 class="text-xl font-semibold mb-4">Session Log</h2>
                <div id="sessionLog" class="bg-gray-50 p-4 rounded-md h-64 overflow-y-auto font-mono text-sm">
                    <!-- Session log will appear here -->
                </div>
            </div>
        </div>
    </div>

    <script>
        let sessionId = null;
        let currentSession = null;

        function startUssd() {
            const phoneNumber = document.getElementById('phoneNumber').value;
            const ussdCode = document.getElementById('ussdCode').value;
            
            if (!phoneNumber || !ussdCode) {
                alert('Please enter phone number and USSD code');
                return;
            }
            
            sessionId = 'test_' + Date.now();
            currentSession = {
                phone_number: phoneNumber,
                service_code: ussdCode,
                text: '',
                session_id: sessionId
            };
            
            document.getElementById('ussdScreen').style.display = 'block';
            document.getElementById('ussdInput').value = '';
            document.getElementById('ussdInput').focus();
            
            addLog('Started USSD session', 'info');
            sendUssdRequest();
        }

        function sendUssdInput() {
            const input = document.getElementById('ussdInput').value;
            if (!input) return;
            
            currentSession.text = input;
            addLog(`User input: ${input}`, 'user');
            sendUssdRequest();
        }

        function sendUssdRequest() {
            const formData = new FormData();
            formData.append('sessionId', currentSession.session_id);
            formData.append('phoneNumber', currentSession.phone_number);
            formData.append('serviceCode', currentSession.service_code);
            formData.append('text', currentSession.text);
            
            fetch('/ussd', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                displayUssdResponse(data);
                currentSession.text = '';
                document.getElementById('ussdInput').value = '';
            })
            .catch(error => {
                addLog(`Error: ${error.message}`, 'error');
            });
        }

        function displayUssdResponse(response) {
            const content = document.getElementById('ussdContent');
            content.textContent = response;
            
            addLog(`USSD Response: ${response}`, 'system');
            
            // Check if session ended
            if (response.startsWith('END')) {
                document.getElementById('ussdInput').disabled = true;
                addLog('Session ended', 'info');
            }
        }

        function endUssd() {
            document.getElementById('ussdScreen').style.display = 'none';
            document.getElementById('ussdInput').disabled = false;
            addLog('Session manually ended', 'info');
        }

        function addLog(message, type = 'info') {
            const log = document.getElementById('sessionLog');
            const timestamp = new Date().toLocaleTimeString();
            const logEntry = document.createElement('div');
            
            let colorClass = 'text-gray-600';
            if (type === 'user') colorClass = 'text-blue-600';
            if (type === 'system') colorClass = 'text-green-600';
            if (type === 'error') colorClass = 'text-red-600';
            if (type === 'info') colorClass = 'text-gray-600';
            
            logEntry.className = colorClass;
            logEntry.textContent = `[${timestamp}] ${message}`;
            
            log.appendChild(logEntry);
            log.scrollTop = log.scrollHeight;
        }

        // Handle Enter key in USSD input
        document.getElementById('ussdInput').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                sendUssdInput();
            }
        });
    </script>
</body>
</html>
