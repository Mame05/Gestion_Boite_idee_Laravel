<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Modifier l'idée</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('idees.update', $idee->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="libelle_idee">Nom de l'idée</label>
                <input type="text" class="form-control" id="libelle_idee" name="libelle_idee" value="{{ old('libelle_idee', $idee->libelle_idee) }}">
            </div>
            <div class="form-group">
                <label for="description">Description de l'idée</label>
                <textarea class="form-control" id="description" name="description">{{ old('description',$idee->description) }}</textarea>
            </div>
            <div class="form-group">
                <label for="categorie_id">Catégorie</label>
                <select class="form-control" id="categorie_id" name="categorie_id">
                    @foreach($categories as $categorie)
                        <option value="{{ $categorie->id }}" {{ $categorie->id == $idee->categorie_id ? 'selected' : '' }}>{{ $categorie->libelle_categorie }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="status">Statut</label>
                <select class="form-control" id="status" name="status">
                    <option value="Approuvee" {{ $idee->status == 'Approuvee' ? 'selected' : '' }}>Approuvée</option>
                    <option value="Refusee" {{ $idee->status == 'Refusee' ? 'selected' : '' }}>Refusée</option>
                </select>
            </div>
            <div class="form-group">
                <label for="date_creation">Date de création</label>
                <input type="datetime-local" class="form-control" id="date_creation" name="date_creation" value="{{ old('date_creation',$idee->date_creation) }}">
            </div>
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>