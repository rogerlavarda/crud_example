<main>
    <section>
        <a href="index.php">
            <button class="btn btn-success">Voltar</button>
        </a>
    </section>

    <h2 class="mt-3"><?=TITLE?></h2>

    <form method="post">
        <div class="form-group">
            <label>Título</label>
            <input class="form-control" type="text" name="titulo" value="<?=$objProjeto->titulo?>" required>
        </div>
        <div class="form-group">
            <label>Descrição</label>
            <textarea class="form-control" name="descricao" required><?=$objProjeto->descricao?></textarea>
        </div>
        <div class="form-group">
            <label>Status</label>
            <div>
                <div class="form-check form-check-inline">
                    <label class="form-group">
                        <input type="radio" name="status" value="s" required checked> Ativo
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-group">
                        <input type="radio" name="status" value="n" required <?=$objProjeto->status=='n' ? 'checked' : ''?>> Inativo
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>
    </form>
</main>