<form id="call_bpopup_form" style="display:none;" action="/plugin/tl_counsel/update_x.php" method="post">
    <input type="hidden" name="co_cate" value="전화상담" >
    <input type="hidden" name="co_referer" value="<?php echo get_text($_SERVER['HTTP_REFERER']); ?>">
    <div style="position:relative; max-width:853px; height:500px; margin:auto;"> 
        <span class="button b-close" style="position:absolute; top:-50px; right:-25px;">
            <button title="Close (Esc)" type="button" class="mfp-close">×</button>
        </span>
        <div style="background-color:#fff">
            <table class="tbl-stat" id="tbl-rank">
                <colgroup>
                    <col style="width:25%">
                    <col style="width:75%">
                </colgroup>
                <thead>
                    <tr>
                        <th colspan="3" scope="col">전화상담 요청</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>이름</strong></td>
                        <td colspan="2"><input type="text" name="co_name" style="width:30%; height:40px" maxlength="10" required></td>
                    </tr>
                    <tr>
                        <td><strong>연락처</strong></td>
                        <td colspan="2"><input type="hidden" id="co_hp" name="co_hp" value="">
                            <select id="co_hp1" style="width:30%; height:40px">
                                <option value="010">010</option>
                                <option value="011">011</option>
                                <option value="016">016</option>
                                <option value="017">017</option>
                                <option value="018">018</option>
                                <option value="019">019</option>
                            </select>
                            -
                            <input style="width:30%; height:40px" maxlength="4" size="4" id="co_hp2" value="">
                            -
                            <input style="width:30%; height:40px" maxlength="4" size="4" id="co_hp3" value=""></td>
                    </tr>
                    <tr>
                        <td><strong>내용</strong></td>
                        <td colspan="2"><textarea id="co_memo" style="width:94%; height:110px;" name="co_memo"></textarea></td>
                    </tr>
                </tbody>
            </table>
            <div style="height:100px; margin:20px; overflow:auto; border:1px solid #ddd; padding:0.5em;">
                <?php
                $sql = "select * from {$g5['content_table']} where co_id='privacy'";
                $content = sql_fetch($sql);
                echo $content['co_content'];
                ?>
            </div>
            <p style="padding:20px">
                <span class="labelck">
                    <input type="checkbox" id="agreement" name="agreement" style="text-align:justify">
                    <label for="agreement">개인정보수집동의</label>
                    <p style="background-color:#999; text-align:center; display:block;"><button type="submit" style="color:#fff;background-color:transparent;border:0; text-align:center; display:block;width:100%;height:100%; padding:20px">전화상담신청</button></p>
                </span>
            </p>
        </div>
    </div>
</form>
<script>
$(function() {
    $('#call_bpopup_form').submit(function(e) {
        e.preventDefault();

        if(!$('#agreement').prop('checked')) {
           alert("개인정보수집에 동의하셔야 합니다."); 
            $('#agreement')[0].focus();
            return;
        }

        $('#co_hp').val( $('#co_hp1').val() + $('#co_hp2').val() + $('#co_hp3').val());
        var x_url = $(this).attr('action');
        $.ajax({
            method: "POST",
            type: "POST",
            url: x_url,
            data: $(this).serialize(),
            dataType: "json"
        })
            .done(function(data) {
                if(data['error']) alert(data['error']);
                else {
                    alert('전화상담 신청을 하셨습니다.');
                    window.location.reload();
                }
            });
    });

});
</script>