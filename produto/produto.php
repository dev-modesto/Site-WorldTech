<?php

include "../adm/conexaoTech.php";
include "../adm/base.php";
?>

<section class="principal-cadastro-produto principal-secao-produto">
    <div class="container-cadastro-produto">
        <h1 class='text-center'>Cadastro de Produtos </h1>
        <hr>
        <form name="cadastro" method="post" action = "cadastrar_produto.php" enctype="multipart/form-data">
            <div class="cadastro-produto format-cadastros">

                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
                </div>  

                <div class="input-group mb-3" required>
                    <label for="categoria" class="input-group-text">Categoria do produto:</label>
                    <select id="categoria" name="categoria" class="form-select">
                        <option value="Todos">-</option>
                        <option name="categoria" value="Notebook">Notebooks</option>
                        <option name="categoria" value="Tablet">Tablets</option>
                        <option name="categoria" value="Smartphone">Smartphones</option>
                        <option name="categoria" value="Fone de ouvido">Fones de ouvido</option>
                        <option name="categoria" value="Relógio">Relógios</option>
                        <option name="categoria" value="Promocao">Promoção</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="preco" class="form-label">Preço</label>
                    <input type="text" class="form-control" id="preco" name="preco" placeholder="Ex.: 149.99" required>
                </div>

                <div class="mb-3">
                    <label for="descricao" class="form-label">Descrição</label>
                    <textarea class="form-control" id="descricao" name="descricao" placeholder="Descrição"></textarea>
                </div>

                <div class="mb-3">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" class="form-control" id="foto" name="foto" placeholder="Preco" required>
                </div>

                <div class="mb-3" required>
                    <p>Deseja colocar este poduto em Destaques?</p>
                    <input type="radio" name="destaque" value="sim"> Sim <br>
                    <input type="radio" name="destaque" value="nao"> Não<br>
                </div> 

                <div class="mb-3" required>
                    <p>Este produto já contém promoção aplicada?</p>
                    <input type="radio" name="promocao" value="sim"> Sim <br>
                    <input type="radio" name="promocao" value="nao"> Não<br>
                </div> 
                <hr>
                <div class="btn-cadastro btn-cadastro-container">
                    <div>
                        <button type="reset" class="btn-cadastro-primary" onclick="history.go(-1)">Voltar</button>
                    </div>

                    <div class="btn-cadastro">
                        <div>
                            <button type="reset" class="btn-cadastro-primary">Limpar</button>
                        </div>
                        <div>
                            <button type="submit" class="btn-cadastro-secondary">Cadastrar</button>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
</section>