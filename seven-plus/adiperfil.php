<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.adiperfil.css">
    <title>Adicionar Perfil</title>
    <?php include_once ("headerEfooter/import-css.php"); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="corpo">
    <header class="cabecalho">
    <?php include_once("headerEfooter/header.html"); ?>
    </header>
    
    <main>
        <div class="header-content">
            <button class="back-button" onclick="window.history.back();">&larr; Voltar</button>
        </div>

        <div class="container">
            <div class="title">Adicionar Perfil</div>
            <div class="subtitle">Adicione mais um perfil no Seven Plus</div>
            <div class="divider"></div>
            <div class="profile-section">
                <div class="profile-pic">
                    <i class="fas fa-user"></i>
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Nome">
                </div>
            </div>
            <div class="divider"></div>
            <div class="button-container">
                <button class="finalize">Finalizar</button>
                <button class="cancel">Cancelar</button>
            </div>
        </div>
        
    </main>

    <footer class="rodape">
        <?php include_once("headerEfooter/footer.html"); ?>
    </footer>
</body>
</html>