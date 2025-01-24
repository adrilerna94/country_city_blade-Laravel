@extends('countries.layout')

@section('content')

<div class="container" style="max-width: 1200px; margin: 20px auto; padding: 20px; background-color: #f4f4f4; border-radius: 5px;">
    <h2 style="text-align: center;">Country Details</h2>

    <!-- Mensaje de éxito si existe -->
    @session('success')
        <div style="background-color: #d4edda; padding: 10px; margin-bottom: 15px; border-radius: 5px;">
            <strong>{{ $value }}</strong>
        </div>
    @endsession

    <!-- Botón de vuelta a la lista de países -->
    <div style="text-align: right; margin-bottom: 15px;">
        <a href="{{ route('countries.index') }}" style="padding: 10px 20px; background-color: #007bff; color: white; text-decoration: none; border-radius: 5px;">
            <i class="fa fa-arrow-left"></i> Back to Country List
        </a>
    </div>

    <!-- Detalles del país -->
    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
        <thead>
            <tr>
                <th style="border: 1px solid #ccc; padding: 8px; background-color: #f0f0f0;">Field</th>
                <th style="border: 1px solid #ccc; padding: 8px; background-color: #f0f0f0;">Value</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td style="border: 1px solid #ccc; padding: 8px;">Code</td>
                <td style="border: 1px solid #ccc; padding: 8px;">{{ $country->Code }}</td>
            </tr>
            <tr>
                <td style="border: 1px solid #ccc; padding: 8px;">Name</td>
                <td style="border: 1px solid #ccc; padding: 8px;">{{ $country->Name }}</td>
            </tr>
            <tr>
                <td style="border: 1px solid #ccc; padding: 8px;">Continent</td>
                <td style="border: 1px solid #ccc; padding: 8px;">{{ $country->Continent }}</td>
            </tr>
            <tr>
                <td style="border: 1px solid #ccc; padding: 8px;">Region</td>
                <td style="border: 1px solid #ccc; padding: 8px;">{{ $country->Region }}</td>
            </tr>
            <tr>
                <td style="border: 1px solid #ccc; padding: 8px;">SurfaceArea</td>
                <td style="border: 1px solid #ccc; padding: 8px;">{{ $country->SurfaceArea }}</td>
            </tr>
            <tr>
                <td style="border: 1px solid #ccc; padding: 8px;">IndepYear</td>
                <td style="border: 1px solid #ccc; padding: 8px;">{{ $country->IndepYear }}</td>
            </tr>
            <tr>
                <td style="border: 1px solid #ccc; padding: 8px;">Population</td>
                <td style="border: 1px solid #ccc; padding: 8px;">{{ $country->Population }}</td>
            </tr>
            <tr>
                <td style="border: 1px solid #ccc; padding: 8px;">LifeExpectancy</td>
                <td style="border: 1px solid #ccc; padding: 8px;">{{ $country->LifeExpectancy }}</td>
            </tr>
            <tr>
                <td style="border: 1px solid #ccc; padding: 8px;">GNP</td>
                <td style="border: 1px solid #ccc; padding: 8px;">{{ $country->GNP }}</td>
            </tr>
            <tr>
                <td style="border: 1px solid #ccc; padding: 8px;">GNPOld</td>
                <td style="border: 1px solid #ccc; padding: 8px;">{{ $country->GNPOld }}</td>
            </tr>
            <tr>
                <td style="border: 1px solid #ccc; padding: 8px;">LocalName</td>
                <td style="border: 1px solid #ccc; padding: 8px;">{{ $country->LocalName }}</td>
            </tr>
            <tr>
                <td style="border: 1px solid #ccc; padding: 8px;">GovernmentForm</td>
                <td style="border: 1px solid #ccc; padding: 8px;">{{ $country->GovernmentForm }}</td>
            </tr>
            <tr>
                <td style="border: 1px solid #ccc; padding: 8px;">HeadOfState</td>
                <td style="border: 1px solid #ccc; padding: 8px;">{{ $country->HeadOfState }}</td>
            </tr>
            <tr>
                <td style="border: 1px solid #ccc; padding: 8px;">Capital</td>
                <td style="border: 1px solid #ccc; padding: 8px;">{{ $country->Capital }}</td>
            </tr>
            <tr>
                <td style="border: 1px solid #ccc; padding: 8px;">Code2</td>
                <td style="border: 1px solid #ccc; padding: 8px;">{{ $country->Code2 }}</td>
            </tr>
        </tbody>
    </table>

</div>

@endsection
