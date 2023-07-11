
{{-- {{ print_r($dataForm ) }} --}}

 @if (getvalue($key,$dataForm[0]) == 'True')
 <img width="10px" src="{{asset('assets/img/checkmark.png')}}" alt="">
 @elseif (getvalue($key,$dataForm[0]) == 'False')
 <b>false</b>
 @else
    <b>{{ $dataForm[0][$key] ?? 'N/A' }}</b>
 @endif
