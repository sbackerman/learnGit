# git 记录

##  五分钟教程

- 已经存在远端的版本库
```bash
# 对于已经存在云端的版本库 直接clone到本地
git clone git@domain.com:/gitdata/yii-weibo.git

# 开发 add,modify some files
git add .
git commit -m "Adding files"
# 先拉取最新的代码，然后在推送到远端
git pull
git push 

```

- 关联本地以及存在的版本库
```bash

git init
git remote add origin git@domain.com:/gitdata/yiicms.git
# git remote -v # 查看远端
git add .
git commit -m "first commit for yiicms"
git push -u origin master

```

- 服务端进行版本库管理
	+ Git 是一个开源的分布式版本控制系统，每个人的电脑上都是一个完整的版本库，即使不联网也能正常工作。
	+ 协作问题： 搞一个中间站(比如搞个 bare仓库)专门做中转，协同开发时，只需通过中转站将各自的修改推送(pull/push)给对方，就可以互相看到对方的修改

```bash
mkdir -p  /gitdata/appliaction/hxx.git
cd /gitdata/appliaction 
git init --bare hxx.git/
chown -R git:git hxx.git/ 
# 此时的git地址 :  git@domain.com:/gitdata/appliaction/hxx.git
```

## 常用命令积累
- 克隆指定分支 git clone -b dev git@gitee.com:houdunwang/hdcms.git [newName]
- 暂存区管理
 	+ 提交所有修改和新增的文件 git add .
 	+ 提交所有文件 git add -A
 	+ 提交更新的文件 git add -u
 	+ 查看暂存区文件列表 git ls-files -s
 	+ 查看暂存区文件内容 git cat-file -p 6e9a94

- 删除版本库与项目目录中的文件 git rm index.php
- 只删除版本库中文件但保存项目目录中文件 git rm --cached index.php
- 修改最后一次提交 git commit --amend

- git clean命令用来从工作目录中删除所有没有跟踪（tracked）过的文件
	+ git clean -n是一次clean的演习, 告诉你哪些文件会被删除
	+ git clean -f删除当前目录下没有tracked过的文件，不会删除.gitignore指定的文件
	+ git clean -df删除当前目录下没有被tracked过的文件和文件夹

## 目录
- P1-1 Git版本控制课程引言-06:06
- P2-2 Git版本控制-集中式与分布式实例分析-10:18
- P3-3 Git版本控制-mac-windows-linux安装git软件-05:22
- P4-4 Git版本控制-配置作者信息-10:53
- P5-5 Git版本控制-创建新仓库与维护旧仓库-05:29
- P6-6 Git版本控制-Git流水线操作分析-05:57
- P7-7 Git版本控制-使用命令完成Git流水线操作-07:10
- P8-8 Git版本控制-.gitignore详解控制版本库文件管理-08:27
- P9-9 Git版本控制-从版本库中删除资源的技巧-08:33
- P10-10 Git版本控制-版本库中修改资料名称-07:24
- P11-11 Git版本控制-使用log日志查看历史操作行为-08:18
- P12-12 Git版本控制-使用amend修改最新一次提交事件-03:48
- P13-13 Git版本控制-管理暂存区中的文件-04:46
- P14-14 Git版本控制-alias命令别名提高操作效率-04:28
- P15-15 Git版本控制-详解Git分支Branch存在意义-12:11
- P16-16 Git版本控制-实例讲解分支branch基本管理操作-06:56
- P17-17 Git版本控制-规范的分支操作流程之分支的合并与删除-03:33
- P18-18 Git版本控制-正确处理分支冲突实例讲解-09:09
- P19-19 Git版本控制-分支管理--merged与--no-merged及分支强制删除操作-06:58
- P20-20 Git版本控制-标准的分支操作工作流-07:52
- P21-21 Git版本控制-stash临时储存区实例讲解-09:03
- P22-22 Git版本控制-使用TAG标签声明项目阶段版本-04:25
- P23-23 Git版本控制-生成zip代码发布压缩包-02:20
- P24-24 Git版本控制-使用系统别名定义git全局指令-03:00
- P25-25 Git版本控制-合并分支产生的实际问题演示-09:35
- P26-26 Git版本控制-rebase合理的优化分支合并-08:51
- P27-27 Git版本控制-国内与国外项目托管平台介绍与在Github中创建项目-06:35
- P28-28 Git版本控制-使用SSH与GITHUB远程服务器进行无密码连接-04:39
- P29-29 Git版本控制-本地版本库主动使用remote与远程GITHUB进行关联-04:17
- P30-30 Git版本控制-本地分支与GITHUB远程分支同步-02:44
- P31-31 Git版本控制-新入职员工参与项目开发时分支使用-03:59
- P32-32 Git版本控制-github远程分支的合并-03:38
- P33-33 Git版本控制-远程分支删除操作--delete-02:23
- P34-34 Git版本控制-自动部署之流程分析与创建WEB站点-08:39
- P35-35 Git版本控制-自动部署之GITHUB代码自动推送事件到WEB服务器部署完成-12:30
---
一共时长: 246 mins, 4.10 hour


