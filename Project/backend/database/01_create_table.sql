create table users (
    userUUID varchar(50) primary key,
    userId varchar(20),
    userAccount varchar(50),
    userPassword varchar(50),

    isActive boolean,
    isDelete boolean,
    createBy varchar(50),
    createAt datetime,
    updateBy varchar(50),
    updateAt datetime,
    deleteBy varchar(50),
    deleteAt datetime
)