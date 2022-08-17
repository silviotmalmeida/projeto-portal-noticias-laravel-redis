<table>
    <thead>
        <tr>
            <th>Título</th>
            <th>Notícia</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
            <tr>
                <td>{{ $article->title }}</td>
                <td>{{ $article->article }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
