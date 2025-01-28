<?php
class SQLite3Result {
  private __construct()
  public columnName(int $column): string|false
  public columnType(int $column): int|false 
  public fetchArray(int $mode = SQLITE3_BOTH): array|false
  public finalize(): true
  public numColumns(): int
  public reset(): bool
}
