                    <div class="row">
                        <div class="span5">
                            <h3>Adicionar Contato</h3>
                        </div>
                    </div>
                    <form class="well form-horizontal" action="/contact/add" method="POST">
                        <div class="control-group">
                            <div class="span8">
                                <label>Nome:</label>
                                <fieldset class="clearfix">
                                    <input type="text" class="span8" name="name" />
                                </fieldset>
                            </div> 
                        </div>
                        <div class="control-group">
                            <div class="span4">
                                <label>Telefone:</label>
                                <fieldset class="clearfix">
                                    <input type="text" class="span4" name="phone" />
                                </fieldset>
                            </div> 
                            <div class="span4">
                                <label>E-mail:</label>
                                <fieldset class="clearfix">
                                    <input type="text" class="span4" name="email" />
                                </fieldset>
                            </div> 
                        </div>
                        <div class="control-group">
                            <div class="span8">                                
                                <button class="btn btn-success pull-right" type="submit"><i class="icon-ok icon-white"></i> Salvar</button>                                
                                <a class="btn btn-info pull-left" href="/contact"><i class="icon-chevron-left icon-white"></i> Voltar</a>
                            </div> 
                        </div>                        
                    </form>