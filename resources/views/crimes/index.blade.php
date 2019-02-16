@extends('layouts.master')

@section('content')



<div class="card">
    <div class="card-header">Crimes</div>
    <div class="card-body">
        @if(!Auth::user()->canPerformCrime())
            {{Auth::user()->getCrimeTime()}}
        @else
            <form method="post" action="{{route('perform-crime')}}">
                @csrf
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Earn</th>
                            <th scope="col">Select</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($i=0)
                        @foreach($crimes as $crime)
                            @php($i++)
                            <tr>
                                <th scope="row"><label for="{{$crime->id}}">{{$i}}</label></th>
                                <td><label for="{{$crime->id}}">{{$crime->name}}</label></td>
                                <td><label for="{{$crime->id}}">{{$crime->earn_xp}}xp / €{{$crime->earn_cash}}</label></td>
                                <td><input type="radio" name="crime" id="{{$crime->id}}" value="{{$crime->id}}" /></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <input type="submit" class="btn btn-primary" value="Perform crime" />
            </form>
        @endif
    </div>
</div>
@endsection
