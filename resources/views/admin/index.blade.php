@extends('layouts.app')
@section('content')

<form>
<table class="table" id="table-users">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Naam</th>
        <th scope="col">Email</th>
        <th scope="col">Rol</th>
        <th scope="col">Active</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($test as $item)     
              <tr>
              <th scope="row">{{$item->id}}</th>
              <td onclick="functie('{{$item->name}}')">
              <td>{{$item->email}}</td>
              <td>{{$item->user_id}}</td>
              <td>
                  @if($item->user_id == '0')
                    <label class="bs-switch">
                        <input type="checkbox" class="ajaxSubmit">
                        <span class="slider round"></span>
                    </label>
                  @endif
                  @if($item->user_id == '1')
                  <label class="bs-switch">
                      <input type="checkbox" class="ajaxSubmit" checked>
                      <span class="slider round"></span>
                  </label>
                  @endif 
              </td>
              
              </tr>
    @endforeach
</tbody>
</table>
</form>
@endsection
@section('script')
    

<script>

    $(document).ready(function(){
        $(this).find("class");
    })

// $(document).ready(function(){
//     $("#table-users").on("click", "tr", function(e) {
//         e.preventDefault();
//         var user_id = null;
//         var variable = @json($met);
//         var id = variable[$(e.currentTarget).index()]['id'];
//         console.log(variable[$(e.currentTarget).index()]['user_id']);
//         variable[$(e.currentTarget).index()]['user_id'];
//         if(variable[$(e.currentTarget).index()]['user_id'] == 1){
//             // console.log(variable[$(e.currentTarget).index()]['user_id']+1);
//             user_id = 2;
//         }
//         else if(variable[$(e.currentTarget).index()]['user_id'] == 2){
//             // console.log(variable[$(e.currentTarget).index()]['user_id'] - 1);
//             user_id = 1;
//         }
//         var ajaxData = {
//                 user_id: user_id,
//                 id: id

//                 };
//                 console.log(ajaxData)
//         $.ajaxSetup({
//                  headers: {
//                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//                  }
//              });

            
//              jQuery.ajax({
//                  url: "{{ url('/admin/post') }}",
//                  type: 'post',
//                  dataType: 'json',
//                  data: {
//                    ajaxData
                   
//                  },
//                  success: function(result){
//                     jQuery('.alert').show();
//                     jQuery('.alert').html(result.success);
//                  }});
//               });
//            });


      //console.log('');
        // jQuery(document).ready(function(){
        //    jQuery('.ajaxSubmit').click(function(e){
        //       e.preventDefault();
        //       $.ajaxSetup({
        //          headers: {
        //              'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        //          }
        //      });
        //       jQuery.ajax({
        //          url: "{{ url('/admin/post') }}",
        //          method: 'post',
        //          data: {
        //             if()

        //             // user_id: jQuery('#name').val(),
        //          },
        //          success: function(result){
        //             jQuery('.alert').show();
        //             jQuery('.alert').html(result.success);
        //          }});
        //       });
        //    });
     </script>
@endsection