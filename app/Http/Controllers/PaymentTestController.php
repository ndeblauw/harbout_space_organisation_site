<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mollie\Laravel\Facades\Mollie;

class PaymentTestController extends Controller
{
    public function preparePayment()
    {
        // Given that you have an ACTIVITY and a USER, you can make a REGISTRATION that has an ID
        ray()->clearAll();

        $expose = 'https://ldji5cgjob.sharedwithexpose.com/payments-test/webhook/';

        $webhook_url = app()->environment('production') ? route('webhooks.mollie') : $expose;

        $payment = Mollie::api()->payments->create([
            'amount' => [
                'currency' => 'EUR',
                'value' => '23.14', // You must send the correct number of decimals, thus we enforce the use of strings
            ],
            'description' => 'Order Andorra Trip Registration #22',
            'redirectUrl' => route('order.success', ['id' => 22]), //This is the REGISTRATION ID of course
            'webhookUrl' => $webhook_url,
            'metadata' => [
                'registration_id' => '22', // And again, this is set dynamically
            ],
        ]);

        // Make sure that you add the payment id to the registration
        // $registration->update(['payment_id' => $payment->id]);

        ray('STARTING', [$payment->id, $payment->amount, $payment->description, $payment->status, $payment->metadata])->green();

        // redirect customer to Mollie checkout page
        return redirect($payment->getCheckoutUrl(), 303);
    }

    public function afterPayment($id)
    {
        ray('AFTER PAYMENT', $id)->blue();

        // Because you have the registration, you can find back the payment here as they are linked
        // so you can also get the payment status
    }

    public function webhook(Request $request)
    {
        if ($request->has('id')) {
            $payment = Mollie::api()->payments->get($request->id);
        }

        ray('WEBHOOK', [$payment->id, $payment->amount, $payment->description, $payment->status, $payment->metadata])->orange();
        // as the payment metadata contain the registration_id, you can also update the registration from here
        // and e.g. have a confirmation email having sent out to the user
    }
}
