<div class="container">
    <table>
        <thead>
        <tr>
            <th class="center" data-field="id">Nom</th>
            <th class="center" data-field="name">Prénom</th>
        </tr>
        </thead>

        <tbody>
        @foreach($users as $user)
            <tr>
            <td class="center"><a href="mdr" class="white-text">{{ $user['nom'] }}</a> </td>
                <td class="center"><a href="{{ url("/profile/".$user["id"]) }}" class="white-text">{{ $user['prenom'] }}</a> </td>
        </tr>
            @endforeach
        </tbody>
    </table>
</div>