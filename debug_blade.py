
import re
import sys

def check_balanced_directives(file_path):
    with open(file_path, 'r', encoding='utf-8') as f:
        lines = f.readlines()

    stack = []
    
    # Directives that open a block
    openers = {
        'if', 'auth', 'guest', 'foreach', 'forelse', 'for', 'while', 
        'section', 'push', 'can', 'cannot', 'isset', 'switch', 'error',
        'production', 'env', 'unless', 'hasSection'
    }
    
    # Directives that close a block
    closers = {
        'endif': ['if', 'isset', 'empty'], # empty is handled specially for forelse usually
        'endauth': ['auth'],
        'endguest': ['guest'],
        'endforeach': ['foreach'],
        'endforelse': ['forelse'],
        'endfor': ['for'],
        'endwhile': ['while'],
        'endsection': ['section'],
        'stop': ['section'],
        'show': ['section'],
        'endpush': ['push'],
        'endcan': ['can'],
        'endcannot': ['cannot'],
        'endswitch': ['switch'],
        'enderror': ['error'],
        'endproduction': ['production'],
        'endenv': ['env'],
        'endunless': ['unless'],
    }
    
    # Directives that are continuations
    continuations = {'else', 'elseif', 'empty', 'case', 'default'}

    print(f"Checking {file_path}...")

    for i, line in enumerate(lines):
        line_num = i + 1
        # Find all directives in the line
        # Match @word but ignore @@word (escaped)
        matches = re.finditer(r'(?<!@)@([a-zA-Z]+)', line)
        
        for match in matches:
            directive = match.group(1)
            
            if directive in openers:
                stack.append((directive, line_num))
                print(f"Line {line_num}: Open @{directive}")
            
            elif directive in closers:
                if not stack:
                    print(f"Error at line {line_num}: Found @{directive} but no block is open.")
                    return
                
                last_open, last_line = stack[-1]
                expected_openers = closers[directive]
                
                # Verify if the closer matches the opener
                # Special handling: @empty can be part of forelse, but isn't a closer itself, it's a continuation.
                # Wait, @empty is NOT a closer. It's like else.
                
                if last_open in expected_openers:
                    stack.pop()
                    print(f"Line {line_num}: Close @{directive} (matches @{last_open} from line {last_line})")
                else:
                    # Special case: section can end with stop or show
                    print(f"Error at line {line_num}: Found @{directive} which closes {expected_openers}, but current open block is @{last_open} from line {last_line}")
                    # return # Don't return immediately, identifying more info might be helpful
            
            elif directive in continuations:
                if not stack:
                    print(f"Error at line {line_num}: Found @{directive} but no block is open.")
                    pass
                else:
                    last_open, last_line = stack[-1]
                    print(f"Line {line_num}: Continuation @{directive} for @{last_open} from line {last_line}")

    if stack:
        print("\nUnclosed directives found:")
        for directive, line_num in stack:
            print(f"@{directive} opened at line {line_num}")
    else:
        print("\nAll blocks appear balanced.")

if __name__ == "__main__":
    check_balanced_directives(r"c:\xampp\htdocs\occ\resources\views\welcome.blade.php")
