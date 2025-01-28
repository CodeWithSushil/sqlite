<?php

namespace Sqlite;

class SQLite3 {
  public const int OK;
  public const int DENY;
  public const int IGNORE;
  public const int CREATE_INDEX;
  public const int CREATE_TABLE;
  public const int CREATE_TEMP_INDEX;
  public const int CREATE_TEMP_TABLE;
  public const int CREATE_TEMP_TRIGGER;
  public const int CREATE_TEMP_VIEW;
  public const int CREATE_TRIGGER;
  public const int CREATE_VIEW;
  public const int DELETE;
  public const int DROP_INDEX;
  public const int DROP_TABLE;
  public const int DROP_TEMP_INDEX;
  public const int DROP_TEMP_TABLE;
  public const int DROP_TEMP_TRIGGER;
  public const int DROP_TEMP_VIEW;
  public const int DROP_TRIGGER;
  public const int DROP_VIEW;
  public const int INSERT;
  public const int PRAGMA;
  public const int READ;
  public const int SELECT;
  public const int TRANSACTION;
  public const int UPDATE;
  public const int ATTACH;
  public const int DETACH;
  public const int ALTER_TABLE;
  public const int REINDEX;
  public const int ANALYZE;
  public const int CREATE_VTABLE;
  public const int DROP_VTABLE;
  public const int FUNCTION;
  public const int SAVEPOINT;
  public const int COPY;
  public const int RECURSIVE;
  
  public __construct(
    string $filename,
    int $flags = SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE,
    string $encryptionKey = ""
  )

public backup(SQLite3 $destination, string $sourceDatabase = "main", string $destinationDatabase = "main"): bool
public busyTimeout(int $milliseconds): bool
public changes(): int
public close(): bool
public createAggregate(
    string $name,
    callable $stepCallback,
    callable $finalCallback,
    int $argCount = -1
): bool
public createCollation(string $name, callable $callback): bool
public createFunction(
    string $name,
    callable $callback,
    int $argCount = -1,
    int $flags = 0
): bool
public enableExceptions(bool $enable = false): bool
public static escapeString(string $string): string
public exec(string $query): bool
public lastErrorCode(): int
public lastErrorMsg(): string
public lastInsertRowID(): int
public loadExtension(string $name): bool
public open(string $filename, int $flags = SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE, string $encryptionKey = ""): void
public openBlob(
    string $table,
    string $column,
    int $rowid,
    string $database = "main",
    int $flags = SQLITE3_OPEN_READONLY
): resource|false
public prepare(string $query): SQLite3Stmt|false
public query(string $query): SQLite3Result|false
public querySingle(string $query, bool $entireRow = false): mixed
public setAuthorizer(?callable $callback): bool
public static version(): array
}

