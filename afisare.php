<!DOCTYPE html>
<html>
<head>
    <title>Afișare formular de contact</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/uikit.css" />
    <script src="js/uikit.js"></script>
    <script src="js/uikit-icons.js"></script>
</head>
<body>
    <header>
        <div class="uk-section">
            <div class="uk-container uk-container-expand">
                <h1>În urma completării formularului...</h1>
            </div>
        </div>
    </header>
    <main>
        <div class="uk-section">
            <div class="uk-container uk-container-expand">
                <div class="uk-panel">
                    <h3>Numele:</h3>
                    <p><?php echo htmlspecialchars($_GET['nume'], ENT_QUOTES, 'UTF-8'); ?></p>
                    <h3>Email:</h3>
                    <p><?php echo htmlspecialchars($_GET['email'], ENT_QUOTES, 'UTF-8'); ?></p>
                    <h3>Mesaj:</h3>
                    <p><?php echo nl2br(htmlspecialchars($_GET['mesaj'], ENT_QUOTES, 'UTF-8')); ?></p>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="uk-section">
            <div class="uk-container uk-container-expand">
                <p>Copyright &copy; 2024</p>
            </div>
        </div>
    </footer>
</body>
</html>
