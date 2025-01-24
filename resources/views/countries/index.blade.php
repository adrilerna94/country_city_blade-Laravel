@extends('countries.layout')

@section('content')

<div class="container" style="max-width: 1200px; margin: 20px auto; padding: 20px; background-color: #f4f4f4; border-radius: 5px;">
  <h2 style="text-align: center;">Country Table</h2>

  @session('success')
      <div style="background-color: #d4edda; padding: 10px; margin-bottom: 15px; border-radius: 5px;">
          <strong>{{ $value }}</strong>
      </div>
  @endsession

  <div style="text-align: right; margin-bottom: 15px;">
      <a href="{{ route('countries.create') }}" style="padding: 10px 20px; background-color: #28a745; color: white; text-decoration: none; border-radius: 5px;">
          <i class="fa fa-plus"></i> Create New Country
      </a>
  </div>

  <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
      <thead>
          <tr>
              <th style="border: 1px solid #ccc; padding: 8px; background-color: #f0f0f0;">Code</th>
              <th style="border: 1px solid #ccc; padding: 8px; background-color: #f0f0f0;">Name</th>
              <th style="border: 1px solid #ccc; padding: 8px; background-color: #f0f0f0;">Continent</th>
              <th style="border: 1px solid #ccc; padding: 8px; background-color: #f0f0f0;">Region</th>
              <th style="border: 1px solid #ccc; padding: 8px; background-color: #f0f0f0;">SurfaceArea</th>
              <th style="border: 1px solid #ccc; padding: 8px; background-color: #f0f0f0;">IndepYear</th>
              <th style="border: 1px solid #ccc; padding: 8px; background-color: #f0f0f0;">Population</th>
              <th style="border: 1px solid #ccc; padding: 8px; background-color: #f0f0f0;">LifeExpectancy</th>
              <th style="border: 1px solid #ccc; padding: 8px; background-color: #f0f0f0;">GNP</th>
              <th style="border: 1px solid #ccc; padding: 8px; background-color: #f0f0f0;">GNPOld</th>
              <th style="border: 1px solid #ccc; padding: 8px; background-color: #f0f0f0;">LocalName</th>
              <th style="border: 1px solid #ccc; padding: 8px; background-color: #f0f0f0;">GovernmentForm</th>
              <th style="border: 1px solid #ccc; padding: 8px; background-color: #f0f0f0;">HeadOfState</th>
              <th style="border: 1px solid #ccc; padding: 8px; background-color: #f0f0f0;">Capital</th>
              <th style="border: 1px solid #ccc; padding: 8px; background-color: #f0f0f0;">Code2</th>
          </tr>
      </thead>

      <tbody>
    <!-- bucle que itera sobre todos los countries generando las filas de la tabla con sus respectivos valores -->
      @forelse ($countries as $index => $country)
          <tr>
              <td style="border: 1px solid #ccc; padding: 8px;">{{ ++$i }}</td> <!-- numerar filas de forma auto -->
              <td style="border: 1px solid #ccc; padding: 8px;">{{ $country->Code }}</td>
              <td style="border: 1px solid #ccc; padding: 8px;">{{ $country->Name }}</td>
              <td style="border: 1px solid #ccc; padding: 8px;">{{ $country->Continent }}</td>
              <td style="border: 1px solid #ccc; padding: 8px;">{{ $country->Region }}</td>
              <td style="border: 1px solid #ccc; padding: 8px;">{{ $country->Population }}</td>
              <td style="border: 1px solid #ccc; padding: 8px;">{{ $country->LifeExpectancy }}</td>
              <td style="border: 1px solid #ccc; padding: 8px;">{{ $country->GNP }}</td>
              <td style="border: 1px solid #ccc; padding: 8px;">{{ $country->GNPOld }}</td>
              <td style="border: 1px solid #ccc; padding: 8px;">{{ $country->LocalName }}</td>
              <td style="border: 1px solid #ccc; padding: 8px;">{{ $country->GovernmentForm }}</td>
              <td style="border: 1px solid #ccc; padding: 8px;">{{ $country->HeadOfState }}</td>
              <td style="border: 1px solid #ccc; padding: 8px;">{{ $country->Capital }}</td>
              <td style="border: 1px solid #ccc; padding: 8px;">{{ $country->Code2 }}</td>
              <td style="border: 1px solid #ccc; padding: 8px;">
                <!-- Form con los enlaces a EDIT, SHOW, DELETE -->
                  <form action="{{ route('countries.destroy', $country->Code) }}" method="POST" style="display: inline;">
                      <a href="{{ route('countries.show', $country->Code) }}" style="padding: 5px 10px; background-color: #007bff; color: white; text-decoration: none; border-radius: 5px;">
                          Show
                      </a>
                      <a href="{{ route('countries.edit', $country->Code) }}" style="padding: 5px 10px; background-color: #ffc107; color: white; text-decoration: none; border-radius: 5px;">
                          Edit
                      </a>
                      @csrf
                      @method('DELETE')
                      <button type="submit" style="padding: 5px 10px; background-color: #dc3545; color: white; border: none; border-radius: 5px;">
                          Delete
                      </button>
                  </form>
              </td>
          </tr>
      @empty
          <tr>
              <td colspan="7" style="text-align: center; padding: 15px;">There is no data.</td>
          </tr>
      @endforelse
      </tbody>

  </table>

  {!! $countries->links() !!} <!-- links de paginación -->
</div>

@endsection
