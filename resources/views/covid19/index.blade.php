@extends('bootstrap-theme')

@section('content')
<h1 class="text-center">&nbsp;Word Coronavirus Report</h1>
<a href="{{ url('/covid19/create') }}" class="btn btn-sm btn-success mr-4">New Record</a> 
<form action="{{ url('/covid19') }}" method="GET" class="my-4">
    <input name="search" id="search" value="{{ request('search') }}" />
    <button type="submit">Search</button>
</form>
<table class="table table-sm table-bordered text-left" style="width:80%">
    <tr class="text-center">
        <th>Date</th> <th>Country</th> <th>Total</th> <th>Active</th> <th>Death</th> <th>Recovered</th> <th></th> <th>total in 1m</th> <th>Action</th>
    </tr>
    @foreach($covid19s as $item)
    <tr>
        <td class="text-center">{{ $item->date }}</td>
        <td>
                @switch($item->country)
                    @case("Thailand")
                        <img src="https://spng.pngfind.com/pngs/s/637-6378530_thailand-flag-logo-vector-thailand-flag-hd-png.png" width=20 >
                        @break
                    @case("China")
                        <img src="https://cdn.countryflags.com/thumbs/china/flag-400.png" width=20 >
                        @break
                    @case("USA")
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Flag_of_the_United_States.svg/285px-Flag_of_the_United_States.svg.png" width=20 >
                        @break
                    @case("Spain")
                        <img src="https://lh3.googleusercontent.com/proxy/lPo9UmTJT4wUX5lwC8Jvtjj1Cj4tTGVFSgNrz9wSL1fv_8UJA6RRP84WN0r7v99dkoywqOyqkKSroQvTy2Of_TGeQxMV0ShkM4zAdsdRLmVqCZr1BAAImXlk3xKKZhU" width=20 >
                        @break
                    @case("Italy")
                        <img src="https://upload.wikimedia.org/wikipedia/commons/0/03/Flag_of_Italy.svg" width=20 >
                        @break
                    @case("France")
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Flag_of_France.svg/1200px-Flag_of_France.svg.png" width=20 >
                        @break
                    @case("Germany")
                        <img src="https://upload.wikimedia.org/wikipedia/commons/b/ba/Flag_of_Germany.svg" width=20 >
                        @break
                    @case("UK")
                        <img src="https://th.fehrplay.com/images/zakon/ukrainskie-flagi-chto-simvoliziruyut-cveta-ukrainskogo-flaga.jpg" width=20 >
                        @break
                    @case("Turkey")
                        <img src="https://upload.wikimedia.org/wikipedia/commons/b/b4/Flag_of_Turkey.svg" width=20 >
                        @break
                    @case("Russia")
                        <img src="https://upload.wikimedia.org/wikipedia/commons/f/f3/Flag_of_Russia.svg" width=20 >
                        @break
                    @case("Iran")
                        <img src="https://sites.google.com/site/naykvtikrrasiwngkh/_/rsrc/1503457087127/thngchati-prathes-xihran/630px-Flag_of_Iran.svg.png?height=228&width=400" width=20 >
                        @break
                    @case("Brazil")
                        <img src="https://upload.wikimedia.org/wikipedia/commons/0/05/Flag_of_Brazil.svg" width=20 >
                        @break
                    @case("Canada")
                        <img src="https://upload.wikimedia.org/wikipedia/commons/c/cf/Flag_of_Canada.svg" width=20 >
                        @break
                    @case("Belgium")
                        <img src="https://upload.wikimedia.org/wikipedia/commons/6/65/Flag_of_Belgium.svg" width=20 >
                        @break
                    @case("Netherlands")
                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/20/Flag_of_the_Netherlands.svg" width=20 >
                        @break
                    @case("India")
                        <img src="https://upload.wikimedia.org/wikipedia/commons/4/41/Flag_of_India.svg" width=20 >
                        @break
                    @case("Switzerland")
                        <img src="https://sites.google.com/site/edusvizra/_/rsrc/1487511858604/thng-praca-chati/%E0%B8%A7-%E0%B8%95%E0%B9%80%E0%B8%8B%E0%B8%AD%E0%B8%A3-%E0%B9%81%E0%B8%A5%E0%B8%99%E0%B8%94-%E0%B8%98%E0%B8%87%E0%B8%A2-%E0%B9%82%E0%B8%A3%E0%B8%9B%E0%B8%98%E0%B8%87%E0%B8%8A%E0%B8%B2%E0%B8%95-%E0%B8%97-%E0%B8%A7%E0%B9%82%E0%B8%A5%E0%B8%81%E0%B8%A3-%E0%B8%AD%E0%B8%99%E0%B8%82%E0%B8%B2%E0%B8%A2%E0%B8%AA-%E0%B8%99%E0%B8%84-%E0%B8%B23X5FT-150X90%E0%B9%80%E0%B8%8B%E0%B8%99%E0%B8%95-%E0%B9%80%E0%B8%A1%E0%B8%95%E0%B8%A3%E0%B9%81%E0%B8%9A%E0%B8%99%E0%B9%80%E0%B8%99%E0%B8%AD%E0%B8%A3-%E0%B8%97%E0%B8%AD%E0%B8%87%E0%B9%80%E0%B8%AB%E0%B8%A5-%E0%B8%AD%E0%B8%87%E0%B9%82%E0%B8%A5%E0%B8%AB%E0%B8%B0%E0%B8%AB%E0%B8%A5-%E0%B8%A1.jpg" width=20 >
                        @break
                    @case("Peru")
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Flag_of_Peru_%28war%29.svg/200px-Flag_of_Peru_%28war%29.svg.png" width=20 >
                        @break
                    @case("Portugal")
                        <img src="https://lh3.googleusercontent.com/proxy/JjQ-C6O0F_4U-chjR_sPqeEMRSjhGo0Sgjg_F2ZyQPkT3IFkW41o7TJRdnqDNPtgP-iy9ueSLE0u0a3o_ntFzoIdyvwsjO9IWDK3WgDwEzrtNJ_hgUS2YQH0Cg" width=20 >
                        @break
                    @case("Ecuador")
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/Flag_of_Ecuador_%281900%E2%80%932009%29.svg/1200px-Flag_of_Ecuador_%281900%E2%80%932009%29.svg.png" width=20 >
                        @break
                    @case("Ireland")
                        <img src="https://upload.wikimedia.org/wikipedia/commons/c/ce/Flag_of_Iceland.svg" width=20 >
                        @break
                    @case("Sweden")
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARwAAACxCAMAAAAh3/JWAAAAHlBMVEUAaqf+zAD/0QAAaKlPfJZggpAAZqpdgZFKepiBj4EDfUmrAAABn0lEQVR4nO3ay43CUBBFwYc9/PJPeIig8IKWkDmVQKvP+q41Y79ul3e26z50/csVB4oDxYHiQHGgOFAcKA4UB4oDxYHiQHGgOFAcKA4UB4oDxYHiQHGgOFAcKA4UB4oDxYHiQHGgOFAcKA4UB4oDxYHiQHGgOFAcKA4UB4oDxYHiQHGgOFAcKA4UB4oDxYHiQHGgOFAcKA4UB4oDxYHiQHGgOFAcKA4UB4oDxYFzxNln3O4H4txvQ9c/ZP3NeDwPxHk+hq5/yNqmvG3zqvPl1oEfflZxoDhQHCgOFAeKA8WB4kBxoDhQHCgOFAeKA8WB4kBxoDhQHCgOFAeKA8WB4kBxoDhQHCgOFAeKA8WB4kDLLmgTCK1JYWzBe4od8pDiQHGgOFAcKA4UB4oDxYHiQHGgOFAcKA4UB4oDxYHiQHGgOFAcKA4UB4oDxYHiQHGgOFAcKA4UB4oDxYHiQHGgOFAcKA4UB4oDxYHiQHGgOFAcKA4UB4oDxYHiQHGgOFAcKA4UB4oDxYHiQHGgOFAcKA4UB4oDxYHiQHGgOHCKOP/ItlPLsoEE4gAAAABJRU5ErkJggg==" width=20 >
                        @break
                    @case("Saudi Arabia")
                        <img src="https://upload.wikimedia.org/wikipedia/commons/0/0d/Flag_of_Saudi_Arabia.svg" width=20 >
                        @break
                    @case("Israel")
                        <img src="https://upload.wikimedia.org/wikipedia/commons/d/d4/Flag_of_Israel.svg" width=20 >
                        @break
                    @case("Mexico")
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fc/Flag_of_Mexico.svg/1200px-Flag_of_Mexico.svg.png" width=20 >
                        @break
                    @case("Austria")
                        <img src="https://upload.wikimedia.org/wikipedia/commons/b/b9/Flag_of_Australia.svg" width=20 >
                        @break
                    @case("Singapore")
                        <img src="https://upload.wikimedia.org/wikipedia/commons/4/48/Flag_of_Singapore.svg" width=20 >
                        @break
                    @case("Pakistan")
                        <img src="https://upload.wikimedia.org/wikipedia/commons/3/32/Flag_of_Pakistan.svg" width=20 >
                        @break
                    @case("Chile")
                        <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Flag_of_Chile.svg" width=20 >
                        @break
                    @case("Japan")
                        <img src="https://upload.wikimedia.org/wikipedia/commons/9/9e/Flag_of_Japan.svg" width=20 >
                        @break
                    @case("Poland")
                        <img src="https://upload.wikimedia.org/wikipedia/commons/1/12/Flag_of_Poland.svg" width=20 >
                        @break
                    @case("Romania")
                        <img src="https://upload.wikimedia.org/wikipedia/commons/7/73/Flag_of_Romania.svg" width=20 >
                        @break
                    @case("Benin")
                        <img src="https://upload.wikimedia.org/wikipedia/commons/0/0a/Flag_of_Benin.svg" width=20 >
                        @break
                    @case("Libya")
                        <img src="https://upload.wikimedia.org/wikipedia/commons/0/05/Flag_of_Libya.svg" width=20 >
                        @break
                    @case("French Polynesia")
                        <img src="https://upload.wikimedia.org/wikipedia/commons/d/db/Flag_of_French_Polynesia.svg" width=20 >
                        @break
                    @case("Nepal")
                        <img src="https://www.gebpowtravel.com/wp-content/uploads/2017/06/%E0%B8%98%E0%B8%87%E0%B9%80%E0%B8%99%E0%B8%9B%E0%B8%B2%E0%B8%A5.jpg" width=20 >
                        @break
                    @case("CAR")
                        <img src="" width=20 >
                        @break
                    @case("Chad")
                        <img src="https://lh3.googleusercontent.com/proxy/ODwxdJ_q-w75m4FLZFnZb52A99xiYLbxMiDq1ezUBQCBcA7aegQ1N6kcIIKswYj4rpzIAI1SWz1MIM6vjf6EHvKJ3O6ijIIQbxu2exJAsFAa1JQu9e3X" width=20 >
                        @break
                    @case("Macao")
                        <img src="data:image/png;base64,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" width=20 >
                        @break
                    @case("Syria")
                        <img src="https://lh3.googleusercontent.com/proxy/qI1JP13i2Jh6whogWYHFMDs6IOKVriMVoT6EDC2HB4V7SBBg8zRrvBcD35S1z2a_32yHsN9cmCFoIdHLol2Ji8dbzM0W4Lr_OFtVHowdJwe4BTFM-Yva" width=20 >
                        @break
                    @case("Eritrea")
                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/29/Flag_of_Eritrea.svg" width=20 >
                        @break
                    @case("Saint Martin")
                        <img src="https://upload.wikimedia.org/wikipedia/commons/d/d3/Flag_of_Sint_Maarten.svg" width=20 >
                        @break
                    
                @endswitch
                {{ $item->country }}
        </td>
        <td class="text-center">{{ number_format( $item->total ) }}</td>
        <td class="text-center">{{ $item->total }}</td>
        <td class="text-center">{{ $item->active }}</td>
        <td class="text-center">{{ $item->death }}</td>
        <td class="text-center">{{ $item->recovered }}</td>
        <td class="text-center">{{ number_format( $item->total_in_1m , 2 ) }}</td>
        <td class="text-center">
            <a href="{{ url('/covid19/'.$item->id ) }}" class="btn btn-sm btn-primary">View</a>
            <a href="{{ url('/covid19/'.$item->id.'/edit' ) }}" class="btn btn-sm btn-warning">Edit</a>
            <form method="POST" action="{{ url('/covid19' . '/' . $item->id) }}" style="display:inline">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Confirm delete?')">
                    Delete
                </button>
            </form>

        </td>

    </tr>
    @endforeach
</table>
<div class="mt-4">{{ $covid19s->appends(['search' => request('search')])->links() }}</div>
@endsection

