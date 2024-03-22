<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulletin de Salaire</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Bulletin de Salaire</h1>
    <table>
        <tr>
            <th colspan="2">Informations Employé</th>
        </tr>
        <tr>
            <td>Nom</td>
            <td>{{ $paiement->personnel->nom }}</td>
        </tr>
        <tr>
            <td>Prénom</td>
            <td>{{ $paiement->personnel->prenom }}</td>
        </tr>
        <tr>
            <td>Téléphone</td>
            <td>{{ $paiement->personnel->telephone }}</td>
        </tr>
        <tr>
            <td>CNI</td>
            <td>{{ $paiement->personnel->cni }}</td>
        </tr>
        <tr>
            <td>Date de Paiement</td>
            <td>{{ $paiement->date_paiement }}</td>
        </tr>
        <tr>
            <td>Salaire Total</td>
            <td>{{ number_format($salaireTotal, 2) }}</td>
        </tr>
        <tr>
            <td>Montant</td>
            <td>{{ number_format($paiement->montant, 2) }}</td>
        </tr>
    </table>
</body>
</html>
