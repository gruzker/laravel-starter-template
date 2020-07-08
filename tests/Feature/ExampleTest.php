<?php

it('testing homepage')
    ->get('/')
    ->assertSee('Laravel')
    ->assertStatus(200);

