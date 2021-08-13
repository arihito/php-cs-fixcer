<?php
/***
 * php-cs-fixcer設定方法 https://qiita.com/suin/items/4242aec018d086312fe7
 * ジェネレータ https://mlocati.github.io/php-cs-fixer-configurator/#version:3.0
*/
return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR2' => true, // ＠PSR2に準拠
        'align_multiline_comment' => true, // 複数行のコメントを揃える
        'array_syntax' => ['syntax' => 'short'], // 配列の構文を短く
        'binary_operator_spaces' => true, // 二項演算子の前後の空白
        'blank_line_after_opening_tag' => true, // 開始タグの後の空行
        'blank_line_before_statement' => ['statements' => ['declare', 'do', 'for', 'foreach', 'if', 'switch', 'try']], // 行頭の空文字
        'cast_spaces' => true, // 型変換スペース
        'class_attributes_separation' => true, // 属性分離のクラス
        'combine_consecutive_issets' => true, // 連続したissetsの結合
        'combine_consecutive_unsets' => true, // 連続したアンセットの結合」
        'compact_nullable_typehint' => true, // nullableタイプヒントをコンパクト化
        'concat_space' => ['spacing' => 'one'], // 連続するスペースの間隔
        'declare_equal_normalize' => true, // 等しい正規化の宣言
        'declare_strict_types' => true, // 厳格な型の宣言
        'dir_constant' => true, // 定数の表示
        'ereg_to_preg' => true, // eregからpregへ
        'escape_implicit_backslashes' => true, // 暗黙のバックスラッシュの回避
        'explicit_indirect_variable' => true, // 間接変数の明示
        'explicit_string_variable' => true, // 文字列変数の明示
        'final_internal_class' => true, // 最終的な内部クラス
        'function_to_constant' => true, // 関数から定数へ
        'function_typehint_space' => true, // 関数の型定義の空白
        'general_phpdoc_annotation_remove' => ['annotations' => ['class', 'package', 'author']], // phpdocの一般的なアノテーションでは削除
        'hash_to_slash_comment' => true, // ハッシュからスラッシュへのコメント
        'heredoc_to_nowdoc' => true, // ヒアドキュメントからナウドキュメントへ
        'include' => true, // インクルードの使用
        'is_null' => ['use_yoda_style' => false], // is_nullにヨーダスタイルを使う
        'linebreak_after_opening_tag' => true, // タグを開いたら改行する
        'list_syntax' => true, // リスト構文
        'lowercase_cast' => true, // 小文字の型変換
        'magic_constant_casing' => true, // マジックコンスタントケーシング
        'method_chaining_indentation' => true, // メソッド連結インデント
        'method_separation' => true, // メソッドの分離
        'modernize_types_casting' => true, // 型の近代化キャスト
        'native_function_casing' => true, // ネイティブ関数の表記
        'no_alias_functions' => true, // 別名の関数を使わない本当
        'no_blank_lines_after_class_opening' => true, // クラスオープンの後の空行なし
        'no_blank_lines_after_phpdoc' => true, // phpdocの後に空行を入れない
        'no_empty_comment' => true, // コメントを空にしない
        'no_empty_phpdoc' => true, // phpdocを空にしない
        'no_empty_statement' => true, // ステートメントを空にしない
        'no_extra_consecutive_blank_lines' => ['tokens' => ['break', 'continue', 'extra', 'return', 'throw', 'use', 'parenthesis_brace_block', 'square_brace_block', 'curly_brace_block']], // 連続した空行を含めない
        'no_homoglyph_names' => true, // 同音異義語を使わない
        'no_leading_import_slash' => true, // 先頭のインポートスラッシュなし
        'no_leading_namespace_whitespace' => true, // 名前空間の先頭の空白を削除
        'no_mixed_echo_print' => true, // echoとprintを混在しない
        'no_multiline_whitespace_around_double_arrow' => true, // 二重アロー演算子の前後に複数行の空白がない
        'no_multiline_whitespace_before_semicolons' => true, // セミコロンの前に複数行の空白を入れない
        'no_null_property_initialization' => true, // nullプロパティの初期化を行わない
        'no_php4_constructor' => true, // php4 コンストラクタを使用しない
        'no_short_bool_cast' => true, // 短いboolの型変換がない
        'no_singleline_whitespace_before_semicolons' => true, // セミコロンの前に行や空白を削除
        'no_spaces_around_offset' => true, // オフセットの前後にスペースを入れない
        'no_trailing_comma_in_list_call' => true, // リストコールの末尾にカンマを入れない
        'no_trailing_comma_in_singleline_array' => true, // 単一行配列の末尾にカンマを入れない
        'no_unneeded_control_parentheses' => true, // 制御用の括弧を使わない
        'no_unneeded_curly_braces' => true, // 必要のない中括弧を削除
        'no_unneeded_final_method' => true, // ファイナリーメソッドが不要な場合は削除
        'no_unreachable_default_argument_value' => true, // アクセスできないデフォルト引数の値を削除
        'no_unused_imports' => true, // 未使用のインポートを削除
        'no_useless_else' => true, // 無駄なelseを削除
        'no_useless_return' => true, // 無駄なreturnを削除
        'no_whitespace_before_comma_in_array' => true, // 配列のカンマの前の空白を削除
        'no_whitespace_in_blank_line' => true, // 空行に空白を入れない
        'normalize_index_brace' => true, // インデックス番号の正規化
        'object_operator_without_whitespace' => true, // オブジェクトのアロー演算子前後の空白を削除
        'ordered_class_elements' => true, // クラスの要素を並び替え
        'ordered_imports' => true, // インポートファイルをABC順に並び替え
        'php_unit_construct' => true, // PHPユニットの構造定義
        'php_unit_dedicate_assert' => true, // PHPユニットの専用アサート
        'php_unit_mock' => true, // PHPユニットのモック
        'php_unit_namespaced' => true, // PHPユニットの名前空間
        'phpdoc_add_missing_param_annotation' => ['only_untyped' => false], // PHPDocで指定されてない引数注釈を追加（型が無い場合のみ）
        'phpdoc_align' => ['tags' => ['param']], // PHPDocの整列
        'phpdoc_annotation_without_dot' => true, // phpdocドットなしアノテーション
        'phpdoc_indent' => true, // PHPDocのインデント
        'phpdoc_inline_tag' => true, // PHPDocのインラインタグ
        'phpdoc_no_access' => true, // アクセスのないPHPDoc
        'phpdoc_no_empty_return' => true, // PHPDocでの空の戻り値なし
        'phpdoc_no_package' => true, // パッケージの無いPHPDoc
        'phpdoc_order' => true, // PHPDocの並び替え
        'phpdoc_return_self_reference' => true, // PHPDocの自己参照を返す
        'phpdoc_scalar' => true, // PHPDocのスカラー
        'phpdoc_single_line_var_spacing' => true, // PHPDocの単一行変数の空白
        'phpdoc_summary' => true, // phpdocの要約本当
        'phpdoc_to_comment' => true, // PHPDocのコメント入力
        'phpdoc_trim' => true, // PHPDocの空白削除:
        'phpdoc_types' => true, // PHPDocの型
        'phpdoc_types_order' => true, // PHPDocの型の順序
        'phpdoc_var_without_name' => true, // PHPDocの名前のない変数
        'pow_to_exponentiation' => true, // 乗算を指数関数へ
        'protected_to_private' => true, // 継承保護から完全保護へ
        'random_api_migration' => true, // ランダムなAPIを移行
        'return_type_declaration' => true, // 返り値の型宣言
        'self_accessor' => true, // 自己アクセサー
        'semicolon_after_instruction' => true, // 命令の後にセミコロンを入れる
        'short_scalar_cast' => true, // スカラーの短い型変換
        'simplified_null_return' => true, // 簡略化されたnullのリターン
        'single_blank_line_before_namespace' => true, // 名前空間の前の一行空行
        'single_line_comment_style' => true, // 一行コメントスタイル
        'single_quote' => true, // 一重引用符
        'space_after_semicolon' => ['remove_in_empty_for_expressions' => true], // セミコロン後の空白を削除
        'standardize_not_equals' => true, // イコールではない標準化
        'ternary_operator_spaces' => true, // 三項演算子の空白
        'ternary_to_null_coalescing' => true, // 三項演算子とヌル演算子の結合
        'trailing_comma_in_multiline_array' => true, // 複数行の配列の末尾にカンマを入れる
        'trim_array_spaces' => true, // 配列の空白のトリム
        'unary_operator_spaces' => true, // 単項演算子のスペース
        'void_return' => true, // 戻り値無しのリターンを許容
        'whitespace_after_comma_in_array' => true, // 配列のカンマの後の空白
        'yoda_style' => ['equal' => false, 'identical' => false], // ヨーダ記法
    ])
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->exclude('vendor')
            ->in(__DIR__)
    );
