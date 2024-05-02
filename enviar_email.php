if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $curriculo = $_POST['curriculo'];
    $mensagem = $_POST['mensagem'];

    $to = 'lucas.tas@live.com';
    $subject = 'Nova mensagem do formulário de contato';
    
    $message = "Nome: $nome\n\n
                Email: $email\n\n
                Telefone: $telefone\n\n
                Curriculo: $curriculo\n\n
                Mensagem:\n$mensagem";

    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo 'Mensagem enviada com sucesso!';
    } else {
        echo 'Erro ao enviar a mensagem. Por favor, tente novamente.';
    }
} else {
    echo 'Este script deve ser chamado via método POST.';
}