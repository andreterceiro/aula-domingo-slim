<?php $this->layout('master', ['title' => $title]) ?>

<p>Create User</p>

<form action="/user/store" method="post">
    <input type="text" name="firstName" placeholder="FirstName">
    <input type="text" name="lastName" placeholder="LastName">
    <input type="text" name="email" placeholder="Email">
    <input type="text" name="password" placeholder="Password">
    <button type="submit">Create User</button>
</form>