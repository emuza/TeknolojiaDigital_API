# ChatGPT API Documentation

## Introduction
The ChatGPT API is a service that allows you to interact with a language model to generate natural language text based on user input. This documentation provides details on how to use the API effectively.

## Base URL
- Base URL: https://ai.teknolojia.digital/chatGPTApi.php

## Authentication
No authentication is required to use this API.

## Endpoint

### 1. POST /chatGPTApi.php

#### Description
This endpoint allows you to send a user message to the ChatGPT model and receive a response.

#### Request
- HTTP Method: POST
- URL: `https://ai.teknolojia.digital/chatGPTApi.php`

##### Headers
- `Content-Type: application/x-www-form-urlencoded`

##### Parameters
- `content` (string, required): The user's message.

#### Example Request (PHP)
```php
<?php
$content = "User message here";

$ch = curl_init('https://ai.teknolojia.digital/chatGPTApi.php');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'content=' . urlencode($content));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if ($response === false) {
    echo "CURL Error: " . curl_error($ch);
    exit;
}

curl_close($ch);

// Handle the API response
echo $response;
?>
