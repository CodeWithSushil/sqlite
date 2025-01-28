<?php

class SQLite3Stmt {
  private __construct(SQLite3 $sqlite3, string $query)
  public bindParam(string|int $param, mixed &$var, int $type = SQLITE3_TEXT): bool 
  public bindValue(string|int $param, mixed $value, int $type = SQLITE3_TEXT): bool 
  public clear(): bool 
  public close(): true 
  public execute(): SQLite3Result|false 
  public getSQL(bool $expand = false): string|false 
  public paramCount(): int 
  public readOnly(): bool 
  public reset(): bool
}
