<div class="container">
  <div class="row">
    <form class="form-horizontal" action="/auth/authentication">

      <div class="form-group">
        <label for="inputEmail" class="col-sm-offset-2 col-sm-2 control-label">ID</label>
        <div class="col-sm-6">
          <input type="email" class="form-control" id="id" placeholder="E-mail">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword" class="col-sm-offset-2 col-sm-2 control-label">비밀번호</label>
        <div class="col-sm-6">
          <input type="password" class="form-control" id="password" placeholder="Password">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-4 col-sm-4 col-sm-offset-4">
          <div class="checkbox">
            <label>
              <input type="checkbox"> 정보 기억하기
            </label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-4 col-sm-4 col-sm-offset-4">
          <button type="submit" class="btn btn-default">가입하기</button>
        </div>
      </div>

      <div class="col-sm-offset-10 col-sm-2">
        <input type="submit" class="btn btn-primary" value="로그인">
      </div>
    </form>
  </div>
</div>
