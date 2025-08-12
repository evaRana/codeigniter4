<?= $this->extend('layouts/admin_layout') ?>
<?= $this->section('content'); ?>
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 col-12">
                    <h2>Text Editor</h2>
                </div>
                <div class="col-sm-6 col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard'); ?>"><i
                                    class="iconly-Home icli svg-color"></i></a>
                        </li>
                        <li class="breadcrumb-item">Editor</li>
                        <li class="breadcrumb-item active">Text Editor</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="row"></div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header card-no-border pb-0">
                        <h3>Editor</h3>
                    </div>
                    <div class="card-body">
                        <div class="toolbar-box">
                            <div id="toolbar7"><span class="ql-formats">
                                    <select class="ql-size">
                                        <option value="small">Small</option>
                                        <option selected="">Normal</option>
                                        <option value="large">Large</option>
                                        <option value="huge">Huge</option>
                                    </select></span><span class="ql-formats">
                                    <button class="ql-bold">Bold</button>
                                    <button class="ql-italic">Italic</button>
                                    <button class="ql-underline">Underline</button>
                                    <button class="ql-strike">Strike</button>
                                    <button class="ql-script" value="sub"></button>
                                    <button class="ql-script" value="super"></button></span><span class="ql-formats">
                                    <button class="ql-header" value="1"></button>
                                    <button class="ql-header" value="2"></button></span><span class="ql-formats">
                                    <button class="ql-list" value="ordered">List</button>
                                    <button class="ql-list" value="bullet">Bullet</button>
                                    <button class="ql-indent" value="-1"></button>
                                    <button class="ql-indent" value="+1"></button></span><span class="ql-formats">
                                    <button class="ql-link">Link</button>
                                    <button class="ql-image">Image</button>
                                    <button class="ql-video">Video</button>
                                    <select class="ql-color"></select>
                                    <select class="ql-background"></select></span>
                                <!-- Add more options here--><span class="ql-formats">
                                    <button class="ql-blockquote">Blockquote</button>
                                    <button class="ql-code-block"></button></span><span class="ql-formats">
                                    <button class="ql-align" value=""></button>
                                    <button class="ql-align" value="center"></button>
                                    <button class="ql-align" value="right"></button>
                                    <button class="ql-align" value="justify"></button></span><span class="ql-formats">
                                    <button class="ql-clean"></button></span>
                            </div>
                            <div class="quill-paragraph" id="editor7">
                                <p>There was a road along with that open place. When the tiger saw any man passing by he
                                    said to him, “Brother, here is a good bangle. I wish to give it to you. Don’t fear.
                                    lam old and infirm now. I now pray to God five times a day and doing it will be
                                    useful to you. Don’t fear, come to me and take other religious acts. This bangle is
                                    useless to me. It will be useful to you. Don’t fear, come to me and take this.”</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-none">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header card-no-border pb-0">
                        <h3>Snow Theme</h3>
                    </div>
                    <div class="card-body">
                        <div class="toolbar-box">
                            <div id="toolbar5"><span class="ql-formats">
                                    <select class="ql-size">
                                        <option value="small">Small</option>
                                        <option selected="">Normal</option>
                                        <option value="large">Large</option>
                                        <option value="huge">Huge</option>
                                    </select><span class="ql-formats">
                                        <button class="ql-bold">Bold</button>
                                        <button class="ql-italic">Italic</button>
                                        <button class="ql-underline">Underline</button>
                                        <button class="ql-strike">Strike</button>
                                        <button class="ql-script" value="sub"></button>
                                        <button class="ql-script" value="super"></button></span><span
                                        class="ql-formats">
                                        <button class="ql-list" value="ordered">List</button>
                                        <button class="ql-list" value="bullet">Bullet</button>
                                        <button class="ql-indent" value="-1"></button>
                                        <button class="ql-indent" value="+1"></button></span><span class="ql-formats">
                                        <button class="ql-link">Link</button>
                                        <button class="ql-image">Image</button>
                                        <button class="ql-video">Video</button>
                                        <select class="ql-color"></select></span>
                                    <!-- Add more options here--><span class="ql-formats">
                                        <button class="ql-blockquote">Blockquote</button>
                                        <button class="ql-code-block"></button></span><span class="ql-formats">
                                        <button class="ql-align" value=""></button>
                                        <button class="ql-align" value="center"></button>
                                        <button class="ql-align" value="right"></button>
                                        <button class="ql-align" value="justify"></button></span></span></div>
                            <div class="quill-paragraph" id="editor5">
                                <p>As a <strong>web designer</strong>, your role is crucial in creating visually
                                    appealing and user-friendly websites. You are responsible for designing the layout,
                                    selecting color schemes, and creating an intuitive user interface. You work closely
                                    with clients to understand their requirements and translate them into stunning
                                    website designs. Your expertise lies in using HTML, CSS, and JavaScript to bring
                                    these designs to life. You pay attention to detail, ensuring that every element is
                                    pixel-perfect and responsive across different devices.</p>
                                <ol>
                                    <li>Artist </li>
                                    <li>Developer </li>
                                    <li>Musician</li>
                                </ol>
                                <ul>
                                    <li>Web-designer </li>
                                    <li>UI-UX designer </li>
                                    <li>Software engineer</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>