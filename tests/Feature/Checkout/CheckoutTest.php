<?php

use \Livewire\Livewire;
use \App\Livewire\Checkout;
use \App\Enums\CheckoutStepsEnum;

it('checkout is rendering', function (){
    Livewire::test(Checkout::class)
        ->assertStatus(200);
});

test('if user validation is working', function (){
    Livewire::test(Checkout::class)
        ->set('user.name', '')
        ->set('user.email', '')
        ->call('submitInformationStep')
        ->assertHasErrors(['user.*']);
});

test('if address validation is working', function (){
    Livewire::test(Checkout::class)
        ->set('user.name', fake()->name())
        ->set('user.email', fake()->email())
        ->set('address.address', '')
        ->call('submitInformationStep')
        ->assertHasErrors(['address.*']);
});

test('if user can access the shipping step', function (){
    Livewire::test(Checkout::class)
        ->set('user.name', fake()->name())
        ->set('user.email', fake()->email())
        ->set('address.zipcode', "01001010")
        ->set('address.address', fake()->streetAddress())
        ->set('address.district', fake()->word())
        ->set('address.city', fake()->city())
        ->set('address.number', "10")
        ->set('address.state', fake()->stateAbbr())
        ->call('submitInformationStep')
        ->assertSet('step', CheckoutStepsEnum::SHIPPING->value);
});
