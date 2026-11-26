# re-cultu.com ディレクトリマップ

作成日: 2026-11-27 ／ 対象: `site-file/`（ドメイン: https://re-cultu.com/）

サイトは2つの部分でできています。

- **静的サイト（メディア部分）**: 各ディレクトリの `index.html` が1ページ。全48ページ。WordPress（Cocoon テーマ）から書き出した静的 HTML です。
- **EC サイト `/ec/`**: WordPress + WooCommerce のサイト本体（PHP）。商品ページ・カート・マイアカウントはここで動的に生成されます。

> `sitemap.xml` の48件と、ローカルにある `index.html` の48件は完全に一致しています。静的ページどうしのリンク切れはありません。

---

## 1. ページ構成（URL ツリー）

```
/                                   トップ「和もの【りかると】」
├── about/                          りかるとの理念
│
├── cloth/                          布・和紙（カテゴリトップ）
│   ├── fundoshi/                   ふんどし
│   ├── j-pattern/                  和柄一覧
│   └── tenugui/                    手ぬぐい
│       ├── azuma/                  手ぬぐいで作るあずま袋の制作ガイド
│       ├── how-to/                 手ぬぐいの多様な使い方ガイド
│       └── roll/                   手ぬぐいのスタイリッシュな巻き方
│
├── j-cloth/                        和服（カテゴリトップ）
│   ├── j-cloth/                    日本の和服・着物の変遷と主要な種類
│   ├── hair-fifty/                 50代向け和装の髪形（黒留袖）
│   ├── wedding/                    和装結婚式の全て
│   └── happi/                      法被
│       └── how-to-wear/            法被の着方完全ガイド
│
├── kazari/                         飾り物・アクセサリー（カテゴリトップ）
│   ├── kanzashi/                   簪（かんざし）の通販          ★EC商品リンクあり
│   │   ├── history/                かんざしの歴史と文化
│   │   └── how/                    簪の挿し方完全ガイド          ★EC商品リンクあり
│   └── pirece/                     和風ピアス・和装ピアス・和柄ピアス ★EC商品リンクあり
│
├── plate/                          木札・プレート（カテゴリトップ）
│   └── senja/                      千社札
│       └── what/                   千社札とは？意味・歴史・楽しみ方
│
├── season/                         シーズン（カテゴリトップ）
│   └── ichiryu/                    一粒万倍日とは？2026年はいつ？
│
├── column/
│   └── shrine/                     神社参拝ガイド（コラム一覧）
│       ├── css/style.css           コラム専用スタイル
│       │
│       │  ── 参拝・神社の基礎 ──
│       ├── shrine_visit/           神社のお参りの仕方
│       ├── visit_attire/           神社に行く時の服装
│       ├── shrine_history/         神社の歴史
│       ├── shrine_fox/             神社のきつねの意味
│       ├── omikuji_hankyo/         おみくじの半凶とは
│       │
│       │  ── ご祈祷・お祓い ──
│       ├── prayer_ritual/          ご祈祷（御祈祷）とは
│       ├── purification_meaning/   お祓いとは
│       ├── household_safety/       家内安全とは
│       ├── fukuoka_yakubarai/      福岡で厄払いができる神社
│       │
│       │  ── 初穂料・のし袋 ──
│       ├── offering_meaning/       初穂料の読み方・意味
│       ├── envelope_writing/       初穂料の封筒・のし袋の書き方
│       ├── money_insert/           初穂料のお金の入れ方
│       ├── offering_handover/      初穂料の渡し方
│       ├── purification_envelope/  お祓いののし袋の書き方
│       ├── evil_warding/           厄払いの初穂料の書き方
│       ├── car_purification/       車のお祓いの初穂料
│       ├── safe_delivery/          安産祈願の初穂料
│       ├── shichigosan_offering/   七五三の初穂料
│       │
│       │  ── お守り ──
│       ├── amulet_meaning/         お守りの意味
│       ├── amulet_types/           お守りの種類一覧
│       ├── amulet_colors/          お守りの色の意味一覧
│       └── substitute_amulet/      身代わりお守りとは
│
└── ec/                             EC サイト（WordPress / WooCommerce）
    ├── cart/                       お買い物カゴ（動的・クロール除外）
    ├── my-account/                 マイアカウント（動的・クロール除外）
    ├── checkout/                   購入手続き（動的・クロール除外）
    └── product/                    商品ページ（動的）
        ├── sakuramai/  kokucho/  aocho/          ← かんざし系ページ・トップから
        └── pirece-momo/  pirece-yellow/  pirece-mizu/  pirece-aotsuru/  ← ピアスページから
```

### ページ数の内訳

| セクション | パス | ページ数 |
|---|---|---|
| トップ・理念 | `/`, `/about/` | 2 |
| 布・和紙 | `/cloth/` | 7 |
| 和服 | `/j-cloth/` | 6 |
| 飾り物・アクセサリー | `/kazari/` | 5 |
| 木札・プレート | `/plate/` | 3 |
| シーズン | `/season/` | 2 |
| 神社コラム | `/column/shrine/` | 23（一覧1＋記事22） |
| **合計** | | **48** |

---

## 2. ファイル・フォルダ構成（リポジトリ）

```
site-file/
├── index.html              トップページ
├── sitemap.xml             静的48ページのサイトマップ
├── robots.txt              /ec/ の管理画面・カート・決済などをクロール除外
├── README.md
├── .gitignore              wp-config.php・WooCommerce ログなどを除外
├── .claude/launch.json     ローカル確認用サーバー（python http.server :8765）
│
├── about/ cloth/ j-cloth/ kazari/ plate/ season/ column/
│                           ↑ 各ページの index.html（上記ツリー参照）
│
├── wp-content/             静的ページが読み込む共通アセット
│   ├── themes/
│   │   ├── cocoon-master/        親テーマ（CSS・JS・Font Awesome・icomoon・baguetteBox）
│   │   │   └── skins/skin-fuwari-mirucha/   使用中のスキン
│   │   └── cocoon-child-master/  子テーマ（style.css・javascript.js）
│   ├── plugins/
│   │   ├── smart-slider-3/       トップのスライダー用 JS/CSS
│   │   └── google-site-kit/      計測用 JS
│   └── uploads/                  画像（2025/12, 2026/01, 03, 09, 10, slider2）
│
├── wp-includes/            WordPress コアの共通 CSS/JS（jQuery、block-library など）
│
└── ec/                     EC サイト本体（WordPress 一式・PHP）
    ├── wp-admin/           管理画面
    ├── wp-includes/        WordPress コア
    ├── wp-config.php       DB 接続情報（.gitignore で除外）
    └── wp-content/
        ├── plugins/        woocommerce, woocommerce-payments, woocommerce-services,
        │                   woocommerce-square, woo-stripe-payment,
        │                   stripe-tax-for-woocommerce, google-site-kit
        ├── themes/         cocoon-master / cocoon-child-master ほか
        │                   （storefront, twentytwenty* 系, hestia, alberta,
        │                    arilewp, fukasawa, yith-proteo）
        ├── languages/  uploads/  upgrade/
```

### ファイル数のめやす

- 全体: 約2万3千ファイル（うち約1万9千が `ec/` 内の WordPress・プラグイン）
- 静的サイトのページ: `index.html` × 48
- `ec/` は PHP が約1万3千ファイルで、大半は WooCommerce と Google Site Kit のプラグインです。

---

## 3. 補足・気づいた点

- **グローバルナビ**: ヘッダーのメニューは「お買い物カゴ（`/ec/cart/`）」「マイアカウント（`/ec/my-account/`）」の2つだけで、全ページ共通です。カテゴリへの導線はページ本文とトップから張られています。
- **静的 → EC の導線**: 商品ページ（`/ec/product/...`）へリンクしているのは `index.html`, `kazari/kanzashi/`, `kazari/kanzashi/how/`, `kazari/pirece/` の4ページだけです。
- **リンク表記ゆれ**: `/ec/product/pirece-aotsuru` は、末尾スラッシュあり・なしの両方の書き方でリンクされています。WordPress 側でリダイレクトされるので動作はしますが、揃えておくと無難です。
- **スペル**: `kazari/pirece/` は「pierce（ピアス）」の綴りと違いますが、公開中の URL なので変えるならリダイレクトの設定が必要です。
- **URL の重複**: `j-cloth/j-cloth/` は親ディレクトリと同じ名前になっています。
- **未使用のテーマ**: `ec/wp-content/themes/` には使っていないテーマが多く残っています（使用中は Cocoon）。
