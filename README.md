# practice_backend

CRUDアプリについて、昔研修で使ったものから課題出します。よかったらやってみてください。
目的というより、どんなことをやるかが必要なのかなと昨日鈴木くんと話して思いました。
## 以下の要件を満たすCRUD APIを作成してください。
### 技術要件
* REST API（OpenAPI仕様）で作成してください。
* データベースの操作は必ずO/Rマッパーを利用してください。
* IDEはVisual Studio Codeを利用してください。
* （Dockerは使用しなくても問題ありません。）
### 前提
データベースには、以下のテーブルを作成してください。
（Migration / Seedingを利用して入れても、DBに直接入れても構いません）
添付みてください。
### 作成API
### GET /api/v1/product
* 登録されている商品を抽出するAPIを作成してください。
* クエリストリングで、検索条件を指定できるようにしてください。全てAND条件で良いです。
	* name = LIKE検索
	* price_low = 値段の最小
	* price_high = 値段の最大
### POST /api/v1/product
* 商品を1件登録するAPIを作成してください。
* バリデーションは一旦不要です。
### PUT /api/v1/product/{id}
* 登録されている商品を編集するAPIを作成してください。
### DELETE /api/v1/product/{id}
* 登録されている商品を削除するAPIを作成してください。
### GET /api/v1/product/{id}
* 登録されている商品を1件抽出するAPIを作成してください。
* 指定されたproductは、vendorもリレーションで取得するようにしてください。
### Optional
* デバッガを利用できるようにしてください。
* Migration/Seedingでデータ管理できるようにしてください。
* POST/PUT APIはバリデーションエラーを返せるようにしてください。
* ![スクリーンショット 2023-12-05 14 19 20 (1)](https://github.com/suzuken-ov/practice_backend/assets/146830674/3f762940-5f3d-49dd-a4c0-2223caa15833)
