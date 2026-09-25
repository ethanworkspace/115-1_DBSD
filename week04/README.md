# 第 4 週｜SQL（1/2）建表與查詢（2026/10/01）

- 對應教科書：Ch12 SQL 結構化查詢語言
- 教學內容：
  - 12-1／12-2 CREATE TABLE、INSERT、SELECT、WHERE
  - 資料型態與主鍵、NOT NULL 約束
  - 【測試主題 1】規格→驗收條件：把一句需求寫成「輸入 X 應得 Y」的驗收表
  - 【測試主題 2】查詢結果驗證：先寫下預期筆數，再讓 AI 寫 SQL 跑在自己資料上比對

## 隨堂作業

作業W04：在 phpMyAdmin 建表匯入自己版本 50 筆，用 SELECT COUNT 驗證筆數＝50

- 第 3 節上機時完成，貼到當週 Canva 答題卡自己學號末兩碼的卡片，下課前完成

## 作業W04 學習單（1 題）

**題目**：在 phpMyAdmin 建 `ships` 資料表（欄位對應 ER 圖），把自己版本的 50 筆匯入，然後 `SELECT COUNT(*) FROM ships;` 應得 50。

**資料**：「我的 50 筆」（第 3 週發下的 csv）。

**繳交物**：phpMyAdmin 截圖：看得到 SQL 語句與 COUNT 結果 50。

**評分要點（Pass／Fail）**：COUNT ＝ 50；欄位型態合理（噸位／靠泊時間為數值）。

## 註解：本週補做作業W03

第 3 週作業 W03 於本週一併完成，題目見 [week03/README.md](../week03/README.md)。
