<div class="x_panel">
    <div class="x_title">
        <h2>Permisos
            <small>asignados al usuario</small>
        </h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <br>
        <table class="table table-striped jambo_table bulk_action">
            <tr>
                @for($i = 0; $i < $permissions->count(); $i++)
                    <td style="border: none; text-align: left">
                        <input type="checkbox" name="permissions[{{ $permissions[$i]->permission }}][state]"
                               id="{{ $permissions[$i]->id }}"
                               @if($permissions[$i]->has) checked @endif value="true"/>
                        <label for="{{ $permissions[$i]->id }}">
                            {{ $permissions[$i]->description }}
                        </label>

                        <input name="permissions[{{ $permissions[$i]->permission }}][inherited]" type="hidden"
                               value="{{ (is_null($permissions[$i]->inherited) ? null : ($permissions[$i]->inherited ? 1 : 0) ) }}"/>
                    </td>
                    @if(($i+1) % 5 == 0)
            </tr>
            <tr>
                @endif
                @endfor
            </tr>
        </table>
        <br/>
    </div>
</div>