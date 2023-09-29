# OLW Mercado Pago
_The project consists of a cart checkout page that connects with a payment API._

## Technologies used
- Laravel
- Livewire v3
- TailwindCSS
- Webhooks
- Redis Queue
- Docker

## Services Used
- Github
- Mercado Pago Payment API
- ViaCEP API

## System Features
- Magic login
- ViaCEP integration
- Redis Mail queue
- Integration with MP API to pay in 3 different ways
- Webhook that listens to status changes

## Getting Started
- First, clone the repo.
- Make sure you have `Docker` installed
- Install laravel sail, you can check the docs [here](https://laravel.com/docs/10.x/installation#laravel-and-docker)
- Copy `.env.example` and rename it to `.env`
- Create an account [here](https://www.mercadopago.com.br/developers/pt/reference), then create an application integrating TransparentCheckout 
- Copy the application data to .env file
- Then run `./vendor/bin/sail up` and then `./vendor/bin/sail art queue:work`
- Open another terminal and run `./vendor/bin/sail npm run dev`

-Then open your [localhost](http://localhost/) with your browser and voilà. You'll have access to the application


## How to use

### Here's a simple homepage
![Screenshot of the homepage](/README/home.png)

### Magic login
![Screenshot of the magic login](/README/magic_login.png)
![Screenshot of the magic login email](/README/magic_login_email.png)

### Then go to the checkout page
![Screenshot of the checkout page](/README/fake_cart.png)

### After filling the form you will be presented with 3 types of payment, here are 2 of them
![Screenshot of the credit card form](/README/credit_card.png)
![Screenshot of the pix form](/README/pix.png)

### After sending the form, an order will be created
![Screenshot of the created order](/README/order_created.png)
![Screenshot of the created order email](/README/order_created_email.png)

## And after "paying", the API will send a request to the webhook updating the order, here we are faking that request
![Screenshot of the webhook endpoint](/README/webhook_payment.png)
![Screenshot of the approved email](/README/payment_approved_email.png)

## Authors
Lucas Porfirio: @lukeskw (https://github.com/lukeskw)
Please follow my github and join me! You can also find me on [linkedin](https://www.linkedin.com/in/lucas-porfirio-dev/) 
Thanks for the visit and good coding!
