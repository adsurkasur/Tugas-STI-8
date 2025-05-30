import os

# Directory containing the PHP files
dir_path = os.path.dirname(os.path.abspath(__file__))

# List all .php files in the directory
php_files = [f for f in os.listdir(dir_path) if f.endswith('.php')]

def dump_php_files():
    with open(os.path.join(dir_path, 'php_files_dump.txt'), 'w', encoding='utf-8') as out:
        for filename in php_files:
            file_path = os.path.join(dir_path, filename)
            out.write(f'--- {filename} ---\n')
            with open(file_path, 'r', encoding='utf-8') as f:
                out.write(f.read())
            out.write('\n\n')

if __name__ == '__main__':
    dump_php_files()
