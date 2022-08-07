<h1>My First Project DB View</h1>
<table border="1">
    <tr>
        <td>Sr</td>
        <td>Name</td>
        <td>Father Name</td>
        <td>Age</td>
    </tr>
   @foreach($Members as $Member)
   <tr>
        <td>{{$Member->id}}</td>
        <td>{{$Member['Name']}}</td>
        <td>{{$Member['Father Name']}}</td>
        <td>{{$Member['Age']}}</td>
    </tr>
    @endforeach
</table>