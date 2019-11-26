## Create token object

```
    $headerData = [
        'key' => 'value'
    ];
    
    $payloadData = [
        'key' => 'value'
    ];
    
    $payloadEncoded = $encoder->encode($payloadData);
    
    $signatureData = new SignatureSection($signature, $encodedSignature);
    
    $headerEncoded = $encoder->encode($headerData);
    $header = new HeaderSection($headerData, $headerEncoded);
    
    $payloadEncoded = $encoder->encode($payloadData);  
    $payload = new PayloadSection($payloadData);
    
    
    $signatureEncryptedData = $encryptor->encrypt($headerEncoded, $payloadEncoded);
    
    $signatureEncoded = $encoder->encode($signatureEncryptedData); 
    $signature = new SignatureSection($signatureEncryptedData, $signatureEncoded);
    
    $token = new JwtToken($header, $payload, $signature);
```