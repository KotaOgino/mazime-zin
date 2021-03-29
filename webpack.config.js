const path = require("path");
const TerserPlugin = require("terser-webpack-plugin");
const BundleAnalyzerPlugin = require("webpack-bundle-analyzer")
  .BundleAnalyzerPlugin;

module.exports = {
  // モード値を production に設定すると最適化された状態で、
  // development に設定するとソースマップ有効でJSファイルが出力される
  mode: "production",
  // メインとなるJavaScriptファイル（エントリーポイント）
  entry: `./assets/js/index.js`,
  // ファイルの出力設定
  output: {
    //  出力ファイルのディレクトリ名
    path: path.resolve(__dirname, "lib/js"),
    // 出力ファイル名
    filename: "bundle.js",
  },
  plugins: [new BundleAnalyzerPlugin()],
  optimization: {
    minimize: true,
    minimizer: [
      new TerserPlugin({
        // コメントを削除
        extractComments: "all",
        terserOptions: {
          compress: {
            // コンソールログを削除
            drop_console: true,
            ecma: 6,
          },
        },
      }),
    ],
  },

  module: {
    rules: [
      {
        test: /\.js$/,
        use: [
          {
            loader: "babel-loader",
            options: {
              presets: ["@babel/preset-env"],
            },
          },
        ],
        exclude: /node_modules/,
      },
      // Sassファイルの読み込みとコンパイル
      {
        test: /\.scss/, // 対象となるファイルの拡張子
        use: [
          // linkタグに出力する機能
          "style-loader",
          // CSSをバンドルするための機能
          {
            loader: "css-loader",
            options: {
              // オプションでCSS内のurl()メソッドの取り込みを禁止する
              url: false,
              // ソースマップの利用有無
              sourceMap: true,

              // 0 => no loaders (default);
              // 1 => postcss-loader;
              // 2 => postcss-loader, sass-loader
              importLoaders: 2,
            },
          },
          {
            loader: "sass-loader",
            options: {
              sassOptions: {
                // fibers を使わない場合は以下で false を指定
                fiber: false,
              },
              // ソースマップの利用有無
              sourceMap: true,
            },
          },
        ],
      },
    ],
  },
};
