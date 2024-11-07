<div class="row">
    <div class="col-md-8">

        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">@lang('Ficha de la comunidad')</h3>
            </div>

            <div class="card-body">


                <div class="row">
                    <div class="col-3">
                        <!-- fecha de alta -->
                        <div class="form-group">
                            <label>@lang('Fecha de alta')</label>
                            <input type="date" class="form-control"
                                   name="fechalta" value="{{ old('fechalta', $comunidad->fechalta ?? '') }}">
                        </div>
                    </div>

                    <!-- CIF -->
                    <div class="col-2">
                        <div class="form-group">
                            <label>CIF</label>
                            <input type="text" name="cif" value="{{ old('cif', $comunidad->cif ?? '') }}"
                                   class="form-control">
                            {{$errors->first('cif')}}
                        </div>
                    </div>


                    <!-- denominación -->
                    <div class="col-5">
                        <div class="form-group">
                            <label>@lang('Denominación')</label>
                            <input type="text" class="form-control" name="denom"
                                   value="{{ old('denom', $comunidad->denom ?? '')}}">
                            {{$errors->first('denom')}}

                        </div>
                    </div>

                    <!-- Número de propiedades, es decir, unidades registrales
                         min y max validan pero solo si usamos las flechas del widget; al menos en firefox y chrome
                    Admite valor 1 y negativos en validación cliente. Validar limites en lado servidor.
                    -->
                    <div class="col-2">
                        <div class="form-group">
                            <label>@lang('Núm. partes')</label>
                            <input type="number" class="form-control" min="2" max="1000"
                                   name="partes" value="{{ old('partes', $comunidad->partes ?? '') }}">
                        </div>
                    </div>
                </div><!-- ./row -->

                <div class="row">
                    <div class="col-6">
                        <!-- email de la comunidad -->
                        <div class="form-group">
                            <label for="email">@lang('Email')</label>
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                <input type="email" class="form-control" id="email" name="email"
                                       value="{{ old('email', $comunidad->email ?? '') }}">
                            </div>

                        </div>
                    </div>

                    <!-- Retirados los checkbox de activa y gratuita. Código guardado en activa_gratuita.blade.php -->


                </div>

                <div class="row">
                    <!-- dirección postal -->
                    <div class="col-10">
                        <div class="form-group">
                            <label>@lang('Dirección postal')</label>
                            <input type="text" class="form-control" maxlength="35" required
                                   name="direccion" value="{{ old('direccion', $comunidad->direccion ??'') }}"
                                   placeholder="Entre la dirección completa, incluido número, piso, etc.">
                        </div>
                    </div>
                    <!-- País -->
                    <div class="col-2">
                        <div class="form-group">
                            <label>@lang('País')</label>
                            <input type="text" class="form-control" maxlength="3" required
                                   name="pais" value="{{ old('pais', $comunidad->pais??'ESP') }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- código postal -->
                    <div class="col-2">
                        <div class="form-group">
                            <label>@lang('Código postal')</label>
                            <input type="text" maxlength="5" class="form-control" required
                                   name="cp" value="{{ old('cp', $comunidad->cp ?? '') }}">
                        </div>
                    </div>
                    <!-- Municipio -->
                    <div class="col-5">
                        <div class="form-group">
                            <label>@lang('Municipio')</label>
                            <input type="text" class="form-control"
                                   name="municipio" value="{{ old('municipio', $comunidad->municipio ?? '') }}">
                        </div>
                    </div>
                    <!-- localidad -->
                    <div class="col-5">
                        <div class="form-group">
                            <label>@lang('Localidad')</label>
                            <input type="text" class="form-control" required
                                   name="localidad" value="{{ old('localidad', $comunidad->localidad ?? '') }}">
                        </div>
                    </div>

                </div>


                <!-- logo -->


                <!-- observaciones -->
                <div class="form-group">
                    <label>@lang('Observaciones')</label>
                    <textarea class="form-control" rows="3"
                              name="observaciones">{{ old('observaciones', $comunidad->observaciones ?? '') }}
                    </textarea>
                </div>
            </div>   <!-- ./card-body -->
        </div> <!-- ./card card-warning -->


        <div class="card-footer">
            <a class="btn btn-primary"
               href="{{ route('comunidades.index') }}">@lang('Ver todas')</a>

            @if ((Request::route()->getName()=='comunidades.create'))
                <button id="guardar"
                        @if (Gate::allows('create-comunidad')) enabled @else disabled @endif
                        class="btn btn-secondary"
                        onclick="document.getElementById('create-comunidad').submit()">
                    @lang('Guardar')</button>
            @else
                <button name="actualizar" class="btn btn-secondary"
                        @if (Gate::allows('edit-comunidad', $comunidad)) enabled @else disabled @endif
                        onclick="document.getElementById('update-comunidad').submit()">
                    @lang('Actualizar')</button>

                <button name="Borrar" class="btn btn-danger" enabled
                        @if (Gate::allows('delete-comunidad', $comunidad)) enabled @else disabled @endif
                        onclick="return confirm('Estas seguro de querer eliminar esta comunidad')"
                    {{--                        onclick="document.getElementById('delete-comunidad').submit()"--}}
                >
                    @lang('Dar de baja')
                </button>
            @endif

            <button class="btn btn-primary float-right" data-toggle="modal" data-target="#ayuda">
                <i class="fa fa-info"></i> @lang('Ayuda')
            </button>

            <!-- The Modal -->
            <div class="modal" id="ayuda">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">{{__('Ayuda')}}</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            Blablabla <b>blabla</b> blabla
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-info" data-dismiss="modal">@lang('Continuar')</button>
                        </div>

                    </div>
                </div>
            </div>      <!-- the modal ayuda -->


        </div><!-- ./card-footer -->


    </div> <!-- ./col-md-8 -->

    <div class="col-md-4">

        <div class="card card-warning">
            <div class="card-header"><!-- comment -->
                <h3 class="card-title">@lang('Cargos')</h3>
            </div> <!-- ./card-header -->

            <div class="card-body">
                <div class="form-group">
                    <!-- presidente -->
                    <div class="form-group">
                        <label>@lang('Presidente')</label>
                        <input type="text" class="form-control" maxlength="35"
                               name="presidente" value="{{ old('presidente', $comunidad->presidente ?? '') }}">
                    </div>
                    <!-- secretario -->
                    <div class="form-group">
                        <label>@lang('Secretario')</label>
                        <input type="text" class="form-control" maxlength="35"
                               name="secretario" value="{{ old('secretario', $comunidad->secretario ?? '' ) }}">
                    </div>
                    <!-- administrador -->
                    <div class="form-group">
                        <label>@lang('Administrador')</label>
                        <input type="text" class="form-control" maxlength="35"
                               name="administrador" value="{{ old('administrador', $comunidad->administrador ?? '') }}">
                    </div>
                </div>
            </div> <!-- card-body -->

        </div>


        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">@lang('Añadir documento')</h3>
            </div> <!-- ./card-header -->

            <div class="card-body">
                <div class="form-group">

                    <!-- Título -->
                    <div class="form-group">
                        <label>@lang('Título')</label>
                        <input type="text" class="form-control" maxlength="35"
                               name="titulo" value="{{ old('titulo')}}">
                    </div>

                    <!-- Descripción -->
                    <div class="form-group">
                        <label>@lang('Descripción')</label>
                        <textarea class="form-control" rows="2"
                                  name="descripcion">{{ old('descripcion') }}
                        </textarea>
                    </div>

                    <div class="custom-file">
                        <input name="doc" type="file" class="custom-file-input"
                               accept="image/*,.pdf" id="doc_comunidad" value="{{ old('doc') }}">
                        <label class="custom-file-label" for="doc_comunidad">@lang('Elige un archivo')</label>
                    </div>
                    <!--                        <div class="input-group-append">
                                                <span class="input-group-text">Subir</span>
                    </div>-->

                </div>
            </div> <!-- card-body -->

        </div>
    </div><!-- ./col-md-4 -->
</div>   <!-- ./row -->
