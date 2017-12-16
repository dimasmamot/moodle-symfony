/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     14/11/2017 15.06.36                          */
/*==============================================================*/


drop table if exists TBL_ANSWER;

drop table if exists TBL_ASSIGNMENT;

drop table if exists TBL_ASSIGNMENT_ATTEMPT;

drop table if exists TBL_COURSE;

drop table if exists TBL_ENROLL;

drop table if exists TBL_FILE;

drop table if exists TBL_KATEGORI_FILE;

drop table if exists TBL_LESSON;

drop table if exists TBL_PAKET_SOAL;

drop table if exists TBL_QUESTION;

drop table if exists TBL_QUESTION_CATEGORY;

drop table if exists TBL_QUIZ;

drop table if exists TBL_QUIZ_ATTEMPT;

drop table if exists TBL_ROLE;

drop table if exists TBL_SOAL;

drop table if exists TBL_STATUS_ASSIGNMENT;

drop table if exists TBL_SUBJECTS;

drop table if exists TBL_TAG;

drop table if exists TBL_TAG_DETAIL;

drop table if exists TBL_USER;

drop table if exists TBL_USER_DETAIL;

/*==============================================================*/
/* Table: TBL_ANSWER                                            */
/*==============================================================*/
create table TBL_ANSWER
(
   ID_ANSWER            int not null,
   ID_QUESTION          int,
   ANSWER               text,
   VOTE                 int,
   CREATE_AT            date,
   primary key (ID_ANSWER)
);

/*==============================================================*/
/* Table: TBL_ASSIGNMENT                                        */
/*==============================================================*/
create table TBL_ASSIGNMENT
(
   ID_ASSIGNMENT        int not null,
   ID_COURSE_PK         int,
   DUE_DATE             date,
   START_DATE           date,
   NAMA_ASSIGNMENT      varchar(200),
   TRY_SUBMIT_COUNT     int,
   primary key (ID_ASSIGNMENT)
);

/*==============================================================*/
/* Table: TBL_ASSIGNMENT_ATTEMPT                                */
/*==============================================================*/
create table TBL_ASSIGNMENT_ATTEMPT
(
   ID_ASSIGNMENT_ATTEMPT integer not null,
   ID_USER_PK           int,
   ID_ASSIGNMENT        int,
   ID_STATUS_ASSIGNMENT int,
   ID_FILE              int,
   SUBMIT_DATE          date,
   TRY_SUMBIT_COUNT     int,
   SUBMISSION_COMMENT   text,
   GRADE_SUBMISSION     integer,
   primary key (ID_ASSIGNMENT_ATTEMPT)
);

/*==============================================================*/
/* Table: TBL_COURSE                                            */
/*==============================================================*/
create table TBL_COURSE
(
   ID_COURSE_PK         int not null,
   ID_USER_PK           int,
   SUBJECT_ID           int,
   DATE_CREATED         date,
   COURSE_NAME          varchar(200),
   DATE_START           date,
   DATE_END             date,
   COURSE_DESC          text,
   primary key (ID_COURSE_PK)
);

/*==============================================================*/
/* Table: TBL_ENROLL                                            */
/*==============================================================*/
create table TBL_ENROLL
(
   ENROLL_ID            int not null,
   ID_USER_PK           int,
   ID_COURSE_PK         int,
   ENROLL_DATE          date,
   END_DATE             date,
   STATUS               varchar(200),
   primary key (ENROLL_ID)
);

/*==============================================================*/
/* Table: TBL_FILE                                              */
/*==============================================================*/
create table TBL_FILE
(
   ID_FILE              int not null,
   ID_KATEGORI_FILE     int,
   ID_USER_PK           int,
   NAMA_FILE            varchar(200),
   DESKRIPSI_FILE       varchar(200),
   PATH_FILE            text,
   DATE_UPLOAD          date,
   primary key (ID_FILE)
);

/*==============================================================*/
/* Table: TBL_KATEGORI_FILE                                     */
/*==============================================================*/
create table TBL_KATEGORI_FILE
(
   ID_KATEGORI_FILE     int not null,
   NAMA_KATEGORI_FILE   varchar(200),
   primary key (ID_KATEGORI_FILE)
);

/*==============================================================*/
/* Table: TBL_LESSON                                            */
/*==============================================================*/
create table TBL_LESSON
(
   ID_LESSON            int not null,
   ID_FILE              int,
   ID_COURSE_PK         int,
   NAMA_LESSON          varchar(200),
   primary key (ID_LESSON)
);

/*==============================================================*/
/* Table: TBL_PAKET_SOAL                                        */
/*==============================================================*/
create table TBL_PAKET_SOAL
(
   ID_PAKET_SOAL        int not null,
   NAMA_PAKET_SOAL      varchar(200),
   primary key (ID_PAKET_SOAL)
);

/*==============================================================*/
/* Table: TBL_QUESTION                                          */
/*==============================================================*/
create table TBL_QUESTION
(
   ID_QUESTION          int not null,
   ID_USER_PK           int,
   ID_TAG               int,
   ID_QUESTION_CATEGORY int,
   TITLE                text,
   DESCRIPTION          text,
   CREATE_AT            date,
   VIEW                 int,
   VOTE                 int,
   primary key (ID_QUESTION)
);

/*==============================================================*/
/* Table: TBL_QUESTION_CATEGORY                                 */
/*==============================================================*/
create table TBL_QUESTION_CATEGORY
(
   ID_QUESTION_CATEGORY int not null,
   CATEGORY_NAME        varchar(200),
   primary key (ID_QUESTION_CATEGORY)
);

/*==============================================================*/
/* Table: TBL_QUIZ                                              */
/*==============================================================*/
create table TBL_QUIZ
(
   ID_QUIZ              int not null,
   ID_PAKET_SOAL        int,
   ID_COURSE_PK         int,
   NAMA_QUIZ            varchar(200),
   DURASI_QUIZ          int,
   TRY_ATTEMPT          int,
   primary key (ID_QUIZ)
);

/*==============================================================*/
/* Table: TBL_QUIZ_ATTEMPT                                      */
/*==============================================================*/
create table TBL_QUIZ_ATTEMPT
(
   ID_QUEST_ATTEMPT     integer not null,
   ID_USER_PK           int,
   ID_QUIZ              int,
   DATE_TAKEN           date,
   SCORE                int,
   COUNT_ATTEMPT        int,
   primary key (ID_QUEST_ATTEMPT)
);

/*==============================================================*/
/* Table: TBL_ROLE                                              */
/*==============================================================*/
create table TBL_ROLE
(
   ID_ROLE_PK           integer not null,
   ROLE                 varchar(100),
   primary key (ID_ROLE_PK)
);

/*==============================================================*/
/* Table: TBL_SOAL                                              */
/*==============================================================*/
create table TBL_SOAL
(
   ID_DETAIL_QUIZ       int not null,
   ID_PAKET_SOAL        int,
   PERTANYAAN           text,
   OPSI_A               text,
   OPSI_B               text,
   OPSI_C               text,
   OPSI_D               text,
   OPSI_E               text,
   JAWABAN              varchar(2),
   primary key (ID_DETAIL_QUIZ)
);

/*==============================================================*/
/* Table: TBL_STATUS_ASSIGNMENT                                 */
/*==============================================================*/
create table TBL_STATUS_ASSIGNMENT
(
   ID_STATUS_ASSIGNMENT int not null,
   NAMA_STATUS_ASSIGNMENT varchar(200),
   primary key (ID_STATUS_ASSIGNMENT)
);

/*==============================================================*/
/* Table: TBL_SUBJECTS                                          */
/*==============================================================*/
create table TBL_SUBJECTS
(
   SUBJECT_ID           int not null,
   SUBJECT_NAME         varchar(200),
   primary key (SUBJECT_ID)
);

/*==============================================================*/
/* Table: TBL_TAG                                               */
/*==============================================================*/
create table TBL_TAG
(
   ID_TAG               int not null,
   TAG_NAME             varchar(200),
   primary key (ID_TAG)
);

/*==============================================================*/
/* Table: TBL_TAG_DETAIL                                        */
/*==============================================================*/
create table TBL_TAG_DETAIL
(
   ID_TAG               int not null,
   TAG                  varchar(200),
   primary key (ID_TAG)
);

/*==============================================================*/
/* Table: TBL_USER                                              */
/*==============================================================*/
create table TBL_USER
(
   ID_USER_PK           int not null,
   ID_ROLE_PK           integer,
   primary key (ID_USER_PK)
);

/*==============================================================*/
/* Table: TBL_USER_DETAIL                                       */
/*==============================================================*/
create table TBL_USER_DETAIL
(
   ID_USER_DETAIL       integer not null,
   ID_USER_PK           int not null,
   DATE_REGISTRATION    time,
   DATE_LAST_LOGON      time,
   FISRT_NAME           varchar(200),
   LAST_NAME            varchar(200),
   USERNAME             varchar(200),
   PASSWORD             varchar(200),
   EMAIL                varchar(200),
   primary key (ID_USER_DETAIL)
);

alter table TBL_ANSWER add constraint FK_REFERENCE_30 foreign key (ID_QUESTION)
      references TBL_QUESTION (ID_QUESTION) on delete restrict on update restrict;

alter table TBL_ASSIGNMENT add constraint FK_REFERENCE_27 foreign key (ID_COURSE_PK)
      references TBL_COURSE (ID_COURSE_PK) on delete restrict on update restrict;

alter table TBL_ASSIGNMENT_ATTEMPT add constraint FK_REFERENCE_15 foreign key (ID_USER_PK)
      references TBL_USER (ID_USER_PK) on delete restrict on update restrict;

alter table TBL_ASSIGNMENT_ATTEMPT add constraint FK_REFERENCE_16 foreign key (ID_ASSIGNMENT)
      references TBL_ASSIGNMENT (ID_ASSIGNMENT) on delete restrict on update restrict;

alter table TBL_ASSIGNMENT_ATTEMPT add constraint FK_REFERENCE_18 foreign key (ID_STATUS_ASSIGNMENT)
      references TBL_STATUS_ASSIGNMENT (ID_STATUS_ASSIGNMENT) on delete restrict on update restrict;

alter table TBL_ASSIGNMENT_ATTEMPT add constraint FK_REFERENCE_21 foreign key (ID_FILE)
      references TBL_FILE (ID_FILE) on delete restrict on update restrict;

alter table TBL_COURSE add constraint FK_REFERENCE_22 foreign key (ID_USER_PK)
      references TBL_USER (ID_USER_PK) on delete restrict on update restrict;

alter table TBL_COURSE add constraint FK_REFERENCE_24 foreign key (SUBJECT_ID)
      references TBL_SUBJECTS (SUBJECT_ID) on delete restrict on update restrict;

alter table TBL_ENROLL add constraint FK_REFERENCE_4 foreign key (ID_USER_PK)
      references TBL_USER (ID_USER_PK) on delete restrict on update restrict;

alter table TBL_ENROLL add constraint FK_REFERENCE_5 foreign key (ID_COURSE_PK)
      references TBL_COURSE (ID_COURSE_PK) on delete restrict on update restrict;

alter table TBL_FILE add constraint FK_REFERENCE_7 foreign key (ID_KATEGORI_FILE)
      references TBL_KATEGORI_FILE (ID_KATEGORI_FILE) on delete restrict on update restrict;

alter table TBL_FILE add constraint FK_REFERENCE_8 foreign key (ID_USER_PK)
      references TBL_USER (ID_USER_PK) on delete restrict on update restrict;

alter table TBL_LESSON add constraint FK_REFERENCE_20 foreign key (ID_FILE)
      references TBL_FILE (ID_FILE) on delete restrict on update restrict;

alter table TBL_LESSON add constraint FK_REFERENCE_25 foreign key (ID_COURSE_PK)
      references TBL_COURSE (ID_COURSE_PK) on delete restrict on update restrict;

alter table TBL_QUESTION add constraint FK_REFERENCE_29 foreign key (ID_USER_PK)
      references TBL_USER (ID_USER_PK) on delete restrict on update restrict;

alter table TBL_QUESTION add constraint FK_REFERENCE_31 foreign key (ID_TAG)
      references TBL_TAG (ID_TAG) on delete restrict on update restrict;

alter table TBL_QUESTION add constraint FK_REFERENCE_32 foreign key (ID_QUESTION_CATEGORY)
      references TBL_QUESTION_CATEGORY (ID_QUESTION_CATEGORY) on delete restrict on update restrict;

alter table TBL_QUIZ add constraint FK_REFERENCE_17 foreign key (ID_PAKET_SOAL)
      references TBL_PAKET_SOAL (ID_PAKET_SOAL) on delete restrict on update restrict;

alter table TBL_QUIZ add constraint FK_REFERENCE_28 foreign key (ID_COURSE_PK)
      references TBL_COURSE (ID_COURSE_PK) on delete restrict on update restrict;

alter table TBL_QUIZ_ATTEMPT add constraint FK_REFERENCE_13 foreign key (ID_USER_PK)
      references TBL_USER (ID_USER_PK) on delete restrict on update restrict;

alter table TBL_QUIZ_ATTEMPT add constraint FK_REFERENCE_14 foreign key (ID_QUIZ)
      references TBL_QUIZ (ID_QUIZ) on delete restrict on update restrict;

alter table TBL_SOAL add constraint FK_REFERENCE_19 foreign key (ID_PAKET_SOAL)
      references TBL_PAKET_SOAL (ID_PAKET_SOAL) on delete restrict on update restrict;

alter table TBL_TAG_DETAIL add constraint FK_REFERENCE_23 foreign key (ID_TAG)
      references TBL_TAG (ID_TAG) on delete restrict on update restrict;

alter table TBL_USER add constraint FK_REFERENCE_1 foreign key (ID_ROLE_PK)
      references TBL_ROLE (ID_ROLE_PK) on delete restrict on update restrict;

alter table TBL_USER_DETAIL add constraint FK_REFERENCE_26 foreign key (ID_USER_PK)
      references TBL_USER (ID_USER_PK) on delete restrict on update restrict;

