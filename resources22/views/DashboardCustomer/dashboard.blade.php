@extends('layouts.principal')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@stop

@section('content')
    <p>Dashboard Customer</p>
    <!-- <div class="form-container">
                    <div class="form-item">
                        <label>
                </div> -->
    <form action="/action_page.php">
        <label for="invoiceNum">Invoice number:</label><br>
        <input style="border:1px solid black;" type="text" id="invoiceNum" name="invoiceNum"><br>
        <label for="customerNum">Customer number:</label><br>
        <input style="border:1px solid black;" type="text" id="customerNum" name="customerNum"><br><br>
        <input type="submit" value="Submit">
    </form>
    <select class="form-select" aria-label="Default select example">
        <option selected>Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>
@stop
