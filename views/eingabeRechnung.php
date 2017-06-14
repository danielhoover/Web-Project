<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <title>Eingabe Rechnungsaddresse</title>

</head>
<body>
<div class="container">
    <h1 class="well">Eingabe Rechnungsaddresse</h1>
    <div class="col-lg-12 well">
        <div class="row">
            <form>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Firma</label>
                        <input type="text" placeholder="Firma" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label>Vorname</label>
                            <input type="text" placeholder="Vorname" class="form-control">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>Nachname</label>
                            <input type="text" placeholder="Nachname" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Straße/Hausnummer</label>
                        <input type="text" placeholder="Straße/Hausnummer" rows="3" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-sm-4 form-group">
                            <label>Stadt</label>
                            <input type="text" placeholder="Stadt" class="form-control">
                        </div>
                        <div class="col-sm-4 form-group">
                            <label>PLZ</label>
                            <input type="text" placeholder="PLZ" class="form-control">
                        </div>
                        <div class="col-sm-4 form-group">
                            <label>Land</label>
                            <input type="text" placeholder="Land" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Telefon</label>
                        <input type="text" placeholder="Telefonnummer" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>E-Mail</label>
                        <input type="text" placeholder="E-Mail Adresse" class="form-control">
                    </div>
                    <div class="Speichern">
                    <button type="button" class="btn btn-lg btn-info" onclick="window.location.href='index.php'">Speichern</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>