<?php
    include "../adm/base.php";
?>

<!-- contato -->


        <section class="contato__principal">

            <div class="contato__container">
                <div class="contato__endereco">
                    <h2>
                        Como nos encontrar
                    </h2>
                    <ul>
                        <li><i class='bx bxs-map'></i><span>R. Ewbank da Câmara, 91 - Madureira, RJ.</span></li>
                        <li><i class='bx bxs-phone'></i><span>+55 21 2112-2532</span></li>
                        <li><i class='bx bxs-envelope' ></i><span>Atendimento@worldTech.com.br</span></li>
                    </ul>
                </div>
                <div class="contato__mapa">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14703.926096499!2d-43.3419793!3d-22.8771409!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9962dba9d4fe45%3A0x85d6de09980a6ed9!2sSenac%20Madureira!5e0!3m2!1spt-BR!2sbr!4v1679437567078!5m2!1spt-BR!2sbr" width="auto" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <hr>
            <div class="contato__container__mensagem">
                <div class="titulo-mensagem">
                    <h2>Nos envie uma mensagem</h2>
                    <h5>Ficaremos feliz em ouvir você</h5>
                </div>
                <div class="contato__container__input">

                    <form name="msg-contato" method="post" action="minhaPagina.php">
                        
                        <div class="dados-contato">
                            <div id="cadastro-nome-contato">
                                <input type="text" name="nome-contato" id="seuNome" class="input-nome-contato" placeholder="Seu nome" required>
                            </div>
                            <div id="cadastro-email-contato">
                                <input type="email" name="email-contato" id="email" class="input-email-contato" placeholder="E-mail" required>
                            </div>
                            <div id="cadastro-assunto-contato">
                                <input type="text" name="assunto-contato" id="assunto" class="input-assunto-contato" placeholder="Assunto" required>
                            </div>
                            <div id="cadastro-assunto-contato">
                                <textarea name="texto-contato" id="texto-contato" class="input-msg-contato" placeholder="Mensagem" required ></textarea>
                            </div>
                            <div class="cadastro-btn-criar cadastro-btn-msg">
                                <button type="submit" class="submi">Enviar</button>
                            </div>
                        </div>
                    </form>
        
                </div>
            </div>
        </section>





<!-- contato -->

<?php
    include "../adm/rodape.php";
?>