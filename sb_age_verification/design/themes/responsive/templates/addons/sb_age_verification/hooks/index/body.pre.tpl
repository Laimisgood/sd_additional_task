{if empty($smarty.cookies.birthday_confirmed) && empty($smarty.cookies.birthday_denied)}
    <div class="popup-fade">
        <div class="popup">
            <div class="ty-control-group ty-center cm-dialog-auto-size">
                <span class="ty-strong" style="font-size: 18px;">{__("sb_age_verification.title_form")}</span>
            </div>
            <form name="sb_age_verification" action="{""|fn_url}" method="post">
                <div class="ty-control-group ty-center cm-dialog-auto-size">
                    <label class="ty-control-group__item" style="font-size: 18px;"
                        for="av_date">{__("sb_age_verification.birthdate")}:</label>
                    <input type="date" class="ty-input-text" id="av_date" name="sb_age_verification[av_date]">
                </div>
                <div>
                    <div class="ty-control-group ty-center cm-dialog-auto-size">
                        {include 
                            file="buttons/button.tpl" 
                            but_name="dispatch[sb_age_verification.verify]" 
                            but_text=__("confirm") 
                            but_role="submit" 
                            but_meta="ty-btn__secondary"
                            }
                    </div>
                </div>
            </form>
        </div>
    </div>
{/if}

{if $smarty.cookies.birthday_denied}
    <div class="popup-fade">
        <div class="popup">
            <div class="ty-center">
                <h1 style="margin: 0;">{__("sb_age_verification.denied")}</h1>
            </div>
        </div>
    </div>
{/if}