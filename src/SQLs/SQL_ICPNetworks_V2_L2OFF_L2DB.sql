/*
Navicat SQL Server Data Transfer

Source Server         : L2 OFF Interlude
Source Server Version : 120000
Source Host           : 51.81.63.206:1433
Source Database       : lin2db
Source Schema         : dbo

Target Server Type    : SQL Server
Target Server Version : 120000
File Encoding         : 65001

Date: 2020-10-27 01:13:00
*/


-- ----------------------------
-- Table structure for icp_accounts
-- ----------------------------
DROP TABLE [dbo].[icp_accounts]
GO
CREATE TABLE [dbo].[icp_accounts] (
[id] int NOT NULL IDENTITY(1,1) ,
[login] varchar(45) COLLATE Korean_Wansung_CI_AS NULL ,
[email] varchar(255) NOT NULL ,
[acc_id] int NOT NULL DEFAULT ((0)) ,
[status] int NOT NULL DEFAULT ((0)) ,
[repass] int NOT NULL DEFAULT ((1)) ,
[access_level] int NOT NULL DEFAULT ('0') 
)


GO
DBCC CHECKIDENT(N'[dbo].[icp_accounts]', RESEED, 1)
GO

-- ----------------------------
-- Indexes structure for table icp_accounts
-- ----------------------------

-- ----------------------------
-- Primary Key structure for table icp_accounts
-- ----------------------------
ALTER TABLE [dbo].[icp_accounts] ADD PRIMARY KEY ([id])
GO
