-> function php untuk men-generate random bytes untuk enkripsi key
file_put_contents('./keys/encryption_key', base64_encode(random_bytes(32)) . PHP_EOL);
