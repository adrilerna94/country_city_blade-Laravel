@extends('countries.layout')

@section('content')

<div class="container" style="max-width: 1200px; margin: 20px auto; padding: 20px; background-color: #f4f4f4; border-radius: 5px;">
    <h2 style="text-align: center;">Create New Country</h2>

    <!-- Mensaje de error o éxito si existe -->
    @if ($errors->any())
        <div style="background-color: #f8d7da; padding: 10px; margin-bottom: 15px; border-radius: 5px;">
            <strong>Error!</strong> Please check the inputs.
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Formulario para crear un nuevo país -->
    <form action="{{ route('countries.store') }}" method="POST" style="max-width: 800px; margin: 0 auto;">
        @csrf  <!-- CSRF token para protección -->

        <div style="margin-bottom: 15px;">
            <label for="Code" style="display: block;">Code</label>
            <input type="text" id="Code" name="Code" value="{{ old('Code') }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="Name" style="display: block;">Name</label>
            <input type="text" id="Name" name="Name" value="{{ old('Name') }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="Continent" style="display: block;">Continent</label>
            <input type="text" id="Continent" name="Continent" value="{{ old('Continent') }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="Region" style="display: block;">Region</label>
            <input type="text" id="Region" name="Region" value="{{ old('Region') }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="SurfaceArea" style="display: block;">Surface Area</label>
            <input type="text" id="SurfaceArea" name="SurfaceArea" value="{{ old('SurfaceArea') }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="IndepYear" style="display: block;">Independence Year</label>
            <input type="text" id="IndepYear" name="IndepYear" value="{{ old('IndepYear') }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="Population" style="display: block;">Population</label>
            <input type="text" id="Population" name="Population" value="{{ old('Population') }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="LifeExpectancy" style="display: block;">Life Expectancy</label>
            <input type="text" id="LifeExpectancy" name="LifeExpectancy" value="{{ old('LifeExpectancy') }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="GNP" style="display: block;">GNP</label>
            <input type="text" id="GNP" name="GNP" value="{{ old('GNP') }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="GNPOld" style="display: block;">GNPOld</label>
            <input type="text" id="GNPOld" name="GNPOld" value="{{ old('GNPOld') }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="LocalName" style="display: block;">Local Name</label>
            <input type="text" id="LocalName" name="LocalName" value="{{ old('LocalName') }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="GovernmentForm" style="display: block;">Government Form</label>
            <input type="text" id="GovernmentForm" name="GovernmentForm" value="{{ old('GovernmentForm') }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="HeadOfState" style="display: block;">Head of State</label>
            <input type="text" id="HeadOfState" name="HeadOfState" value="{{ old('HeadOfState') }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="Capital" style="display: block;">Capital</label>
            <input type="text" id="Capital" name="Capital" value="{{ old('Capital') }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="Code2" style="display: block;">Code2</label>
            <input type="text" id="Code2" name="Code2" value="{{ old('Code2') }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px;">
        </div>

        <div style="text-align: center; margin-top: 20px;">
            <button type="submit" style="padding: 10px 20px; background-color: #28a745; color: white; border: none; border-radius: 5px;">
                <i class="fa fa-save"></i> Save Country
            </button>
        </div>
    </form>
</div>

@endsection
