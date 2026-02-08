<?php

interface SmsProvider
{
  public function sendSms($to, $message): void;
}

class TwiloAdapter implements SmsProvider
{
  public function sendSms($to, $message): void
  {
    echo "sending {$message} to {$to} using twilo provider";
  }
}

class TelegramAdapter implements SmsProvider
{
  public function sendSms($to, $message): void
  {
    echo "sending {$message} to {$to} using telegram provider";
  }
}

class SmsNotification
{
  private SmsProvider $smsProvider;
  public function provider(string $providerName)
  {
    match ($providerName) {
      'twilo' => $this->smsProvider = new TwiloAdapter(),
      'telegram' => $this->smsProvider = new TelegramAdapter()
    };
  }

  public function __construct()
  {
    $this->smsProvider = new TwiloAdapter(); // default provider
  }

  public function send($to, $message)
  {
    $this->smsProvider->sendSms($to, $message);
  }
}

$notification = new SmsNotification();
$notification->provider('telegram');
$notification->send('jean', 'hi there');
