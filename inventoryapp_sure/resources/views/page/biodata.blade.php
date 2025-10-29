@extends('layouts.master')

$section('title', 'Register')
@section('content')
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>
    <br />

    <form method="POST" action="/welcome">
        @csrf
        <label >First name:</label> <br />
        <br />
        <input type="text" name="firstname" required placeholder="Masukkan first name Anda" /> <br />
        <br />
        <label >Last name:</label> <br />
        <br />
        <input type="text" name="lastname" required placeholder="Masukkan last name Anda" /> <br />
        <br />
        <label>Gender:</label> <br>
        <br />
        <input type="radio" name="Gender" value="1" /> Male <br />
        <input type="radio" name="Gender" value="2" /> Female <br />
        <input type="radio" name="Gender" value="3" /> Other <br />
        <br />
        <label >Nationality:</label> <br>
        <br />
        <select name="Nationality" id="">
            <option value="1">Indonesia</option>
            <option value="2">Malaysia</option>
            <option value="3">English US</option>
            <option value="4">English UK</option>
            <option value="5">Jepang</option>
            <option value="6">Korea</option>
        </select>
        <br />
        <br />
        <label >Language Spoken:</label> <br>
        <br />
        <input type="checkbox" name="LanguageSpoken" value="1" /> Bahasa Indonesia <br />
        <input type="checkbox" name="LanguageSpoken" value="2" /> English <br />
        <input type="checkbox" name="LanguageSpoken" value="3" /> Other <br />
        <br />
        <label >Bio:</label> <br>
        <br />
        <textarea name="Bio" Cols="30" rows="10"></textarea> <br />
    
        <input type="submit" value="Sign Up"/>
        <a href="/">Kembali</a>
    </form>
    @endsection
