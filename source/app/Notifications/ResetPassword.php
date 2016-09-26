<?php
/**
 * Project: academy.zeesaa.com
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    9/24/2016
 * Time:    9:09 PM
 **/
namespace App\Notifications;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Notifications\Messages\MailMessage;

class ResetPasswordNotification extends ResetPassword
{
    /**
     * Build the mail representation of the notification.
     *
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail()
    {
        return (new MailMessage)
            ->line([
                'You are receiving this email because we received a password reset request for your account.',
                'Click the button below to reset your password:',
            ])
            ->action('Reset Password', url('password/reset', $this->token))
            ->line('If you did not request a password reset, no further action is required.');
    }
}