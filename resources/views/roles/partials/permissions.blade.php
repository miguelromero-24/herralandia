<div class="x_panel">
    <div class="x_title">
        <h2>Permisos
            <small>asignados al Rol</small>
        </h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <br>
        <table class="table table-striped jambo_table bulk_action">
            <tr>
                @for($i = 0; $i < $permissions->count(); $i++)
                    <td style="border: none; text-align: left">

                        <input type="checkbox" name="permissions[]" id="{{ $permissions[$i]->id }}"
                               @if($permissions[$i]->has) checked @endif value="{{ $permissions[$i]->permission }}"/>

                        <label for="{{ $permissions[$i]->id }}">
                            {{ $permissions[$i]->description }}
                        </label>

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