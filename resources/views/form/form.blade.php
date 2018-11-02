@extends('layouts.app')
@section('title', 'formulario')
@section('content')
	<form class="form-group" method="POST" action="/form" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="">Foto de perfil</label>
      <input type="file" name="avatar">
    </div>
    <div class="form-group">
      <label for="">Nombre</label>
      <input type="text" name="name">
    </div>
    <div class="form-group">
      <label for="">Apellidos</label>
      <input type="text" name="lastName">
    </div>
    <div class="form-group">
      <label for="">Nombre del tutor</label>
      <input type="text" name="tutorName">
    </div>
    <div class="form-group">
      <label for="">Apellidos del tutor</label>
      <input type="text" name="lastNameTutor">
    </div>
    <div class="form-group">
      <label for="">Fecha de Nacimiento</label>
      <input type="date" name="dateBirth">
    </div>
    <div class="form-group">
      <label for="">Peso (kg)</label>
      <input type="number" name="weight">
    </div>
    <div class="form-group">
      <label for="">Estatura (cm)</label>
      <input type="number" name="height">
    </div>
    <div class="form-group">
      <label for="">Dia de pago</label>
      <input type="date" name="paymentDate">
    </div>
    <div class="form-group">
      <label for="">Teléfono de casa</label>
      <input type="number" name="homePhone">
    </div>
    <div class="form-group">
      <label for="">Teléfono movil</label>
      <input type="number" name="movilPhone">
    </div>
    <div class="form-group">
      <label for="">Tipo de sangre</label>
      <input type="text" name="bloodType">
    </div>
    <button type="submit">Guardar</button>
  </form>
@endsection